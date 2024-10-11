<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $restaurantIds = $user->restaurant()->pluck('id');



        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        //creo variabili con array vuoti
        $months = [];
        $monthsTotal = [];
        $dataYear = [];
        $dataTotalYear = [];

        // Trova il primo mese di ordine esistente
        $firstOrderMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month')
            ->whereIn('restaurant_id', $restaurantIds)
            ->orderBy('month', 'asc')
            ->value('month');

        // Se non ci sono ordini, imposta la data di default
        if (!$firstOrderMonth) {
            $firstOrderMonth = $currentYear . '-' . '01';
        }

        // Genera una lista di mesi dal mese corrente fino al primo mese di ordine
        $start = Carbon::parse($currentYear . '-' . $currentMonth)->startOfMonth();
        $end = Carbon::parse($firstOrderMonth)->startOfMonth();

        // Ottieni i dati mensili filtrati
        $ordersMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
            ->whereIn('restaurant_id', $restaurantIds)
            ->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfMonth(), Carbon::now()->endOfMonth()])
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();

        // Popola i dati con i conteggi degli ordini
        foreach ($ordersMonth as $order) {
            $months[$order->month] = $order->count;
        }

        $labelsMonth = array_keys($months);
        $dataMonth = array_values($months);

        // Ottieni i dati annuali
        $ordersYear = Order::selectRaw('YEAR(created_at) as year, COUNT(*) as count')
            ->whereIn('restaurant_id', $restaurantIds)
            ->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();


        $years = Order::selectRaw('YEAR(created_at) as year')
            ->whereIn('restaurant_id', $restaurantIds)
            ->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->pluck('year');

        foreach ($years as $year) {
            $dataYear[$year] = 0;
        }

        foreach ($ordersYear as $order) {
            $dataYear[$order->year] = $order->count;
        }

        $labelsYear = array_keys($dataYear);
        $dataYear = array_values($dataYear);

        // Guadagni mensili
        $ordersTotalMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(total) as total_amount')
            ->whereIn('restaurant_id', $restaurantIds)
            ->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfMonth(), Carbon::now()->endOfMonth()])
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();

        // Crea l'intervallo di mesi in ordine decrescente
        while ($start->gte($end)) {
            $formattedMonth = $start->format('Y-m');
            $months[$formattedMonth] = 0;
            $monthsTotal[$formattedMonth] = 0;
            $start->subMonth();
        }

        foreach ($ordersTotalMonth as $order) {
            $monthsTotal[$order->month] = $order->total_amount;
        }

        $labelsTotalMonth = array_keys($monthsTotal);
        $dataTotalMonth = array_values($monthsTotal);

        // Guadagni annuali
        $ordersTotalYear = Order::selectRaw('YEAR(created_at) as year, SUM(total) as total_amount')
            ->whereIn('restaurant_id', $restaurantIds)
            ->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();


        foreach ($years as $year) {
            $dataTotalYear[$year] = 0;
        }

        foreach ($ordersTotalYear as $order) {
            $dataTotalYear[$order->year] = $order->total_amount;
        }

        $labelsTotalYear = array_keys($dataTotalYear);
        $dataTotalYear = array_values($dataTotalYear);

        return view('admin.analytics.index', compact(
            'labelsMonth',
            'dataMonth',
            'labelsYear',
            'dataYear',
            'labelsTotalMonth',
            'dataTotalMonth',
            'labelsTotalYear',
            'dataTotalYear'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('admin.analytics.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.analytics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.analytics.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('admin.analytics.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('admin.analytics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('admin.analytics.index');
    }
}
