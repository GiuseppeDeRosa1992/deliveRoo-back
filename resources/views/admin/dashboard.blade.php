@extends('layouts.admin')

@section('style')
    @vite('/resources/scss/dashboard.scss')
@endsection

@section('content')
    <div class="my_container">
        <div id="columnLeft">
            <div id="restaurant_card" class="bg-white rounded shadow-sm">
                <div class="img_container">
                    @if (Str::startsWith($restaurant->image, 'http'))
                        <img src="{{ $restaurant->image }}" class="img_restaurant rounded">
                    @else
                        <img src="{{ asset('storage/' . $restaurant->image) }}" class="img_restaurant rounded">
                    @endif
                </div>
                <div class="detail_restaurant_container">
                    <h5>{{ $restaurant->name }}</h5>
                    <p class="m-0"><span class="fw-bold">Indirizzo:
                        </span><span>{{ $restaurant->address }}</span></p>
                    <p class="m-0"><span class="fw-bold">Telefono:
                        </span><span>{{ $restaurant->phone_number }}</span>
                    <p class="m-0"><span class="fw-bold">P.Iva: </span><span>{{ $restaurant->p_iva }}</span></p>
                    @foreach ($restaurant->categories as $category)
                        @if (Str::startsWith($category->image, 'http'))
                            <img src="{{ $category->image }}" class="img_category me-3 mt-2">
                        @else
                            <img src="{{ asset('storage/' . $category->image) }}" class="img_category me-3 mt-2">
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="product_card" class="bg-white rounded shadow-sm">
                <p>Prodotti trovati: {{ count($products) }}</p>
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th scope="col-4">Immagine</th>
                            <th scope="col-4">Nome prodotto</th>
                            <th scope="col-4">Disponibilità</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    @if (Str::startsWith($product->image, 'http'))
                                        <img src="{{ $product->image }}" class="img_product me-3 mt-2">
                                    @else
                                        <img src="{{ asset('storage/' . $product->image) }}" class="img_product me-3 mt-2">
                                    @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td class="text-center"><i
                                        class="fa-regular {{ $product->visible ? 'fa-circle-check' : 'fa-circle-xmark' }}"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="columnRight" class="bg-white rounded shadow-sm">
            <p>Ordini trovati: {{ count($orders) }}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col-4">Data</th>
                        <th scope="col-4">Nome cliente</th>
                        <th scope="col-4">Totale</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>{{ $order->name_client }}</td>
                            <td>{{ $order->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
