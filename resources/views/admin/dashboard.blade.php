@extends('layouts.admin')

@section('style')
	@vite('/resources/scss/dashboard.scss')
@endsection

@section('content')
	<div class="my_container">
		{{-- MODAL --}}
		<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
			aria-labelledby="modalTitleId" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTitleId">
							Modifica i dati del ristorante
						</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form id="updateRestaurantForm" method="POST" action="{{ route('admin.restaurants.update', $restaurant) }}"
							enctype="multipart/form-data">
							@csrf
							@method('PUT')

							<!-- Step 1: Product Name -->
							<div class="form-step active">
								<div class="form-group mb-3">
									<label for="name" class="my-2">Nome del ristorante</label>
									<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
										value="{{ old('name', $restaurant->name) }}" required>
									<p id="error_name" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-step">
								<div class="form-group mb-3">
									<label for="p_iva">P.iva ristorante</label>
									<input type="text" class="form-control @error('p_iva') is-invalid @enderror" id="p_iva" name="p_iva"
										value="{{ old('p_iva', $restaurant->p_iva) }}" required>
									<p id="error_p_iva" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('p_iva')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>



							<!-- Step 3: address -->
							<div class="form-step">
								<div class="form-group mb-3">
									<label for="address">Indirizzo ristorante</label>
									<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
										value="{{ old('address', $restaurant->address) }}" required>
									<p id="error_address" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-step">
								<div class="form-group mb-3">
									<label for="phone_number">Numero di telefono</label>
									<input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
										name="phone_number" value="{{ old('phone_number', $restaurant->phone_number) }}" required>
									<p id="error_phone_number" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('phone_number')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<label class="mt-2">Seleziona le categorie del tuo ristorante</label>
							<div class="form-group d-flex flex-wrap mb-3">
								@foreach ($categories as $category)
									<div class="form-check">
										<input class="form-check-input category-checkbox" type="checkbox" name="categories[]"
											value="{{ $category->id }}" id="category{{ $category->id }}"
											{{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
										<label class="form-check-label me-3" for="category{{ $category->id }}">
											{{ $category->name }}
										</label>
									</div>
								@endforeach
								<div class="bg-danger rounded m-0 px-1" id="category-error" style="display: none;">
									Seleziona almeno una categoria.
								</div>
								@error('categories')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>


							<!-- Step 6: Image Upload -->
							<div class="form-step">
								<div class="form-group mb-3">
									<label for="image">Carica un immagine o lascia vuoto per non mofidicare l'immagine
										esistente</label>
									<input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
										name="image" accept="image/*">
									@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
					</div>
					<div class="modal-footer justify-content-start">
						<button type="submit" class="my_submit">Salva</button>
						<button type="button" class="my_submit_close" data-bs-dismiss="modal">
							Close
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		{{-- MODAL --}}


		<script>
			document.addEventListener('DOMContentLoaded', function() {
				@if ($errors->any())
					var myModal = new bootstrap.Modal(document.getElementById('modalId'));
					myModal.show();
				@endif
			});
		</script>

		<script>
			const myModal = new bootstrap.Modal(
				document.getElementById("modalId")
			);
		</script>

		<div id="columnLeft">
			<div id="restaurant_card" class="bg-white rounded shadow-sm">
				<span class="my_edit_btn" data-bs-toggle="modal" data-bs-target="#modalId">
					<i class="fa-regular fa-pen-to-square"></i>
				</span>
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
							<td>{{ $order->total }} €</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
