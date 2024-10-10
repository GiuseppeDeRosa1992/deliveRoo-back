{{-- <x-mail::message>
	Nuovo ordine ricevuto

	Thanks,<br>
	{{ config('app.name') }}
</x-mail::message> --}}
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Conferma ordine</title>
</head>

<body>
	<h1>Hai un nuovo ordine da {{ $data['name_client'] }}</h1>
	<h3>Contatti cliente:</h3>
	<p><b>Email:</b> {{ $data['email_client'] }}</p>
	<p><b>Telefono:</b> {{ $data['number_phone'] }}</p>
	<p><b>Indirizzo:</b> {{ $data['address_client'] }}</p>
	<h3>Dettagli ordine:</h3>
	<ul>
		@foreach ($data['products'] as $product)
			<li>{{ $product['name_product'] }} x{{ $product['quantity'] }}
				€{{ $product['price_product'] * $product['quantity'] }}</li>
		@endforeach

	</ul>
	<p class="text-end"><b>Totale pagato: </b> €{{ $data['total'] }}</p>

</body>

</html>
