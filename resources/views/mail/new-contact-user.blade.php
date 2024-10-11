{{-- <x-mail::message>

	Conferma ordine effettuato da {{ $restaurant->name }} <br>

	Dettagli ordine: <br>
	@foreach ($data['products'] as $product)
		{{ $product['name_product'] }} x{{ $product['quantity'] }} €{{ $product['price_product'] * $product['quantity'] }}
		<br>
	@endforeach



	Thanks,<br>
	{{ config('app.name') }}
</x-mail::message> --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Conferma ordine</title>
</head>

<body>
	<h2>Conferma ordine effettuato presso {{ $restaurant->name }}</h2>
	<h3>Dettagli del ristorante</h3>
	<p><b>Indirizzo:</b> {{ $restaurant->address }}</p>
	<p><b>Telefono:</b> {{ $restaurant->phone_number }}</p>

	<h3>Dettagli ordine:</h3>
	<ul>
		@foreach ($data['products'] as $product)
			<li>{{ $product['name_product'] }} x{{ $product['quantity'] }}
				€{{ floatval($product['price_product']) * $product['quantity'] }}</li>
		@endforeach

	</ul>
	<p class="text-end"><b>Totale pagato:</b> €{{ $data['total'] }}</p>
</body>

</html>
