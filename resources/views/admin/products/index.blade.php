@extends('layouts.admin')

@section('style')
	@vite('/resources/scss/productsIndex.scss')
@endsection

@section('content')
	<div class="container-fluid h-100 px-0 pt-3">
		<h1 class="m-0 pt-2 pb-4 px-4">Menù List</h1>
		<div class="row m-0">
			@foreach ($products as $product)
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-4 py-5">
					<div class="card text-center h-100">
						<div class="card-body p-0 px-2 pb-2 d-flex justify-content-between flex-column">
							<div class="position-relative">
								<img src="{{ $product->image }}" class="rounded rounded-circle position-absolute mt-4" alt="{{ $product->image }}">
								<h4 class="card-title mb-0 pb-1">{{ $product->name }}</h4>
								<p class="card-text m-0 py-1">{{ $product->description }}</p>
								<p class="card-text m-0 py-1">€{{ $product->price }}</p>
								<p class="card-text m-0 py-1">{{ $product->type }}</p>
								<p class="card-text m-0 py-1">Disponibilita` <i
										class="fa-regular {{ $product->visible ? 'fa-circle-check' : 'fa-circle-xmark' }}"></i></p>

							</div>
							<div class="row m-0">
								<div class="col-6 p-1">
									<div class="text-center">
										<a href="{{ route('admin.products.edit', $product->id) }}">
											<i class="fa-regular fa-pen-to-square p-3 rounded-5" style="color: #74C0FC; background-color: #D5E5F4;"></i>
										</a>
									</div>
									<span class="m-0 py-1">
										<b>Modifica</b>
									</span>
								</div>
								<div class="col-6 p-1">
									<div class="text-center">
										<a href="{{ route('admin.products.destroy', $product->id) }}">
											<i class="fa-regular fa-trash-can p-3 rounded-5" style="color: #eb0000; background-color: #FFD6CB;"></i>
										</a>
									</div>
									<span class="m-0 py-1">
										<b>Cancella</b>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
