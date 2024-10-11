<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $restaurantId = $user->restaurant()->pluck('id');
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;
        $firstOrderMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month')->whereIn('restaurant_id', $restaurantId)->orderBy('month', 'asc')->value('month');

        if (!$firstOrderMonth) {
            $firstOrderMonth = $currentYear . '-' . '01';
        };

        $months = [];

        $start = Carbon::parse($currentYear . '-' . $currentMonth)->startOfMonth();

        $end = Carbon::parse($firstOrderMonth)->startOfMonth();



        $ordersMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')->whereIn('restaurant_id', $restaurantId)->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfMonth(), Carbon::now()->endOfMonth()])->groupBy('month')->orderBy('month', 'desc')->get();

        foreach ($ordersMonth as $order) {
            $months[$order->month] = $order->count();
        };

        $ordersTotalMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(total) as total_amount')->whereIn('restaurant_id', $restaurantId)->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfMonth(), Carbon::now()->endOfMonth()])->groupBy('month')->orderBy('month', 'desc')->get();

        $monthsTotal = [];
        foreach ($ordersTotalMonth as $order) {
            $monthsTotal[$order->month] = $order->total_amount;
        }

        $ordersYear = Order::selectRaw('YEAR(created_at) as year, COUNT(*) as count')->whereIn('restaurant_id', $restaurantId)->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])->groupBy('year')->orderBy('year', 'desc')->get();

        $dataYear = [];

        foreach ($ordersYear as $order) {
            $dataYear[$order->year] = $order->count;
        };

        $years = Order::selectRaw('YEAR(created_at) as year')->whereIn('restaurant_id', $restaurantId)->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])->groupBy('year')->orderBy('year', 'desc')->get();

        foreach ($years as $year) {
            $dataYear[$order->year] = 0;
        }

        $ordersTotalYear = Order::selectRaw('YEAR(created_at) as year, SUM(total) as total_amount')->whereIn('restaurant_id', $restaurantId)->whereBetween('created_at', [Carbon::parse($firstOrderMonth)->startOfYear(), Carbon::now()->endOfYear()])->groupBy('year')->orderBy('year', 'desc')->get();

        $yearsTotal = [];
        foreach ($ordersTotalYear as $order) {
            $yearsTotal[$order->year] = $order->total_amount;
        }

        while ($start->gte($end)) {
            $formattedMonth = $start->format('Y-m');
            $months[$formattedMonth] = 0;
            $monthsTotal[$formattedMonth] = 0;
            $start->subMonth();
        };

        $labelsMonth = array_keys($months);
        $dateMonth = array_keys($months);
        $labelsYear = array_keys($dataYear);
        $dateYear = array_keys($dataYear);
        $labelsTotalMonth = array_keys($monthsTotal);
        $dateTotalMonth = array_keys($monthsTotal);
        $labelsTotalYear = array_keys($yearsTotal);
        $dateTotalYear = array_keys($yearsTotal);

        return view('admin.analytics.index', compact('labelsMonth', 'dateMonth', 'labelsYear', 'dateYear', 'labelsTotalMonth', 'labelsTotalYear', 'dateTotalMonth', 'dateTotalYear'));
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
