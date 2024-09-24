@extends('layouts.admin')

@section('content')
	<div class="container-fluid  h-100 pt-3">
		<div class="row justify-content-center">
			{{-- *****************RESTAURANT*********** --}}

			<div class="col-12">
				{{ $restaurant->name }}
			</div>

			{{-- ***************ORDERS*********** --}}

			<div class="col-6">
				<div>
					@foreach ($orders as $order)
						{{ $order->name_client }}
					@endforeach
				</div>
			</div>

			{{-- **************PRODUCTS*********** --}}

			<div class="col-6">
				<div>
					@foreach ($products as $product)
						{{ $product->name }}
					@endforeach
				</div>
			</div>

			{{-- ***************ANALYTICS*********** --}}

			<div class="col-12">

			</div>

		</div>
	</div>
@endsection
