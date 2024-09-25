@extends('layouts.admin')

@section('content')
	<div class="container-fluid vh-100 pt-3 overflow-auto">
		<h1 class="m-0 pb-2 text-center">Riepilogo Ordini</h1>
		<div class="row m-0">
			@foreach ($orders as $order)
				<div class="col-12 col-lg-6 col-xl-4 p-2">
					<div class="card text-center my-shadow">
						<div class="card-body p-2">
							<div class="row m-0 align-items-center">
								<div class="col-12 col-lg-6 p-0">
									<h3 class="m-0 pb-1">Dettagli Cliente:</h3>
									<h5 class="card-title mb-0 py-1"><b>Nome:</b> {{ $order->name_client }}</h5>
									<p class="card-text m-0 py-1"><b>Email:</b> {{ $order->email_client }}</p>
									<p class="card-text m-0 py-1"><b>Numero Cellulare:</b> {{ $order->number_phone }}</p>
									<p class="card-text m-0 py-1"><b>Indirizzo</b> {{ $order->address_client }}</p>
									<p class="card-text m-0 py-1"><b>Totale Pagato: €</b> {{ $order->total }}</p>
								</div>
								<div class="col-12 col-lg-6 p-0 my-overflow">
									<h3 class="m-0 pt-2">Prodotti Ordinati:</h3>
									@foreach ($order->products as $product)
										<div class="row m-0 align-items-center">
											<div class="col-10 p-0">
												<h6 class="m-0 py-1">{{ $product->name }} x{{ $product->pivot->quantity }}</h6>
												<h6 class="m-0 py-1">Prezzo: € {{ $product->price }}</h6>
											</div>
											<div class="col-2 p-1">
												<img src="{{ $product->image }}" class="img-fluid rounded rounded-circle" alt="{{ $product->image }}">
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	</div>
	</div>
@endsection

<style scoped>
	.card {
		height: 18rem !important;
	}

	.my-overflow {
		overflow: auto;
		height: 17rem;
	}

	.my-shadow:hover {
		transform: scale(1.01);
		box-shadow: 0 7px 14px #facdad;
	}

	::-webkit-scrollbar {
		width: 7px;
	}

	::-webkit-scrollbar-thumb {
		background-color: #facdad;
		border-radius: 10px;
	}

	@media all and (min-width:300px) and (max-width:399px) {
		.card {
			height: 22rem !important;
		}

		.my-overflow {
			overflow: auto;
			height: 8rem;
		}


		div.col-md-2.p-1 {
			padding: 0.25rem !important
		}
	}

	@media all and (min-width:400px) and (max-width:768px) {
		.card {
			height: 23rem !important;
		}

		.my-overflow {
			overflow: auto;
			height: 10rem;
		}

	}

	@media all and (min-width:769px) and (max-width:991px) {
		.card {
			height: 29rem !important;
		}

		.my-overflow {
			overflow: auto;
			height: 15rem;
		}

		div.col-md-2.p-1 {
			padding: 4rem !important
		}
	}
</style>
