@extends('layouts.admin')

@section('content')
	<div class="container-fluid h-100 mt-3">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 p-5 my_salmon rounded">
				<div class="card">
					<div class="card-header">AGGIUNGI UN PRODOTTO AL TUO RISTORANTE</div>

					<div class="card-body">
						<form id="updateProductForm" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
							@csrf

							<!-- Step 1: Product Name -->
							<div class="form-step active">
								<span class=" alert alert-danger p-1 rounded">* Tutti i campi sono
									obbligatori</span>
								<div class="form-group mb-3">
									<label for="name" class="my-2">Nome del prodotto</label>
									<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
										value="{{ old('name') }}" required>
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


							<!-- Step 2: Ingredients -->
							<div class="form-step">
								<div class="form-group mb-3">
									<label for="description">Ingredienti e descrizione</label>
									<textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
									 rows="3">{{ old('description') }}</textarea>
									<p id="error_description" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>


							<!-- Step 3: Price -->
							<div class="form-step">
								<div class="form-group mb-3">
									<label for="price">Prezzo</label>
									<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
										value="{{ old('price') }}" step="0.01" required>
									<p id="error_price" class="bg-danger text-white rounded m-0 px-1">
										<strong></strong>
									</p>
									@error('price')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>


							<!-- Step 4: Visibility -->
							<div class="form-step">
								<div class="form-group mb-3 form-check">
									<input type="checkbox" class="form-check-input @error('visible') is-invalid @enderror" id="visible"
										name="visible" {{ old('visible') ? 'checked' : '' }}>
									<label class="form-check-label" for="visible">Prodotto disponibile</label>
									@error('visible')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group mb-3">
								<label for="type">Tipologia del prodotto: </label>
								<div class="btn-group btn-group-toggle " data-toggle="buttons">
									<label class="btn btn-outline-danger {{ old('type') == 'Food' ? 'active' : '' }}">
										<input type="radio" name="type" value="Food" @error('type') is-invalid @enderror
											{{ old('type') == 'Food' ? 'checked' : '' }}> Food
									</label>
									<label class="btn btn-outline-warning {{ old('type') == 'Soft Drinks' ? 'active' : '' }}">
										<input type="radio" name="type" value="Soft Drinks" @error('type') is-invalid @enderror
											{{ old('type') == 'Soft Drinks' ? 'checked' : '' }}> Soft Drinks
									</label>
									<label class="btn btn-outline-dark {{ old('type') == 'Drinks' ? 'active' : '' }}">
										<input type="radio" name="type" value="Drinks" @error('type') is-invalid @enderror
											{{ old('type') == 'Drinks' ? 'checked' : '' }}> Drinks
									</label>
									<label class="btn btn-outline-success {{ old('type') == 'Dessert' ? 'active' : '' }}">
										<input type="radio" name="type" value="Dessert" @error('type') is-invalid @enderror
											{{ old('type') == 'Dessert' ? 'checked' : '' }}> Dessert
									</label>
								</div>
								<p id="error_radio" class="bg-danger text-white rounded m-0 px-1">
									<strong></strong>
								</p>
								@error('type')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<!-- Step 6: Image Upload -->
							<div class="form-step">
								<div class="form-group mb-3">
									<label for="image">Immagine del prodotto</label>
									<input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
										name="image" required accept="image/*">
									@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<!-- Step 7: Submit -->
							<button type="submit" class="btn btn-success">AGGIUNGI</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	@vite(['resources/js/create_product.js'])

	<style scoped>
		* {
			font-family: "Alice", serif;
		}

		.form-step.active {
			/* display: block; */
		}

		.form-control:focus {
			border-color: green;
			box-shadow: none;
		}

		input[type="checkbox"]:checked {
			background-color: green;
			border-color: green;
		}

		.my_salmon {
			background-color: #facdad;
		}
	</style>
@endsection
