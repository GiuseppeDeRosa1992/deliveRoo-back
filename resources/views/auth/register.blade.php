@extends('layouts.app')

@section('content')
	<div class="container py-3">
		<div class="row justify-content-center">
			<div class="col-md-8">
				{{-- **********LOGO******* --}}
				<div class="text-center mb-2" style="height: 12rem">
					<img style="height:100%" src="{{ asset('img/MotoLogoFtg.png') }}" alt="">
				</div>
				{{-- **********LOGO******* --}}
				<div class="card">
					<div class="card-header">{{ __('Registrati') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
							@csrf

							<div class="mb-4 row">
								<label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome utente') }}</label>

								<div class="col-md-6">
									<input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
										name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

									@error('user_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo E-Mail') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email" oninput="validateEmailInput()">
									<span id="emailFeedback" style="color: red;"></span>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
										name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password-confirm"
									class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
										autocomplete="new-password">
								</div>
							</div>

							<!-- Step 1: Restaurant Name -->
							<div class="mb-4 row">

								<label for="name" class="col-md-4 col-form-label text-md-right">Nome del ristorante</label>
								<div class="col-md-6">
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


							<div class="mb-4 row">
								<label for="p_iva" class="col-md-4 col-form-label text-md-right">P.iva ristorante</label>
								<div class="col-md-6">
									<input type="text" class="form-control @error('p_iva') is-invalid @enderror" id="p_iva" name="p_iva"
										value="{{ old('p_iva') }}" required>
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

							<div class="mb-4 row">
								<label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo ristorante</label>
								<div class="col-md-6">
									<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
										value="{{ old('address') }}" required>
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



							<div class="mb-4 row">
								<label for="phone_number" class="col-md-4 col-form-label text-md-right">Numero di telefono</label>
								<div class="col-md-6">

									<input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
										name="phone_number" value="{{ old('phone_number') }}" required>
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


							<label class="my-3 ">Seleziona le categorie del tuo ristorante</label>
							<div class="form-group d-flex flex-wrap mb-3">
								@foreach ($categories as $category)
									<div class="form-check mb-2">
										<input class="form-check-input category-checkbox" type="checkbox" name="categories[]"
											value="{{ $category->id }}" id="category{{ $category->id }}">
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
							<div class="form-step my-5">
								<div class="form-group ">
									<label for="image">Carica un immagine
										esistente</label>
									<input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
										name="image" required accept="image/*">
									@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row mt-3">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary my_orange">
										{{ __('Registrati') }}
									</button>
									<div class="mt-3">

										<span>Sei già registrato? </span>
										<a href="{{ route('login') }}">{{ __('Accedi') }}</a>

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

<script>
	function validateEmailInput() {
		const emailInput = document.getElementById('email').value;
		const feedbackElement = document.getElementById('emailFeedback');
		const emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;

		if (emailInput.includes('@') && emailInput.includes('.') && !emailInput.endsWith('.')) {
			feedbackElement.textContent = ""; // Email is valid
		} else {
			feedbackElement.textContent = "Please enter a valid email address.";
		}
	}
</script>

<style scoped>
	.form-control:focus {
		border-color: #facdad !important;
		box-shadow: 0 0 0 0.25rem #facdad !important;
	}

	.my_orange {
		background-color: #FF9900 !important;
		border: none !important;
	}

	.form-check-input:checked {
		background-color: #FF9900 !important;
		border-color: #facdad !important;
	}

	.form-check-input:focus {
		border-color: #facdad !important;
		box-shadow: 0 0 0 0.25rem #facdad !important;
	}

	::-webkit-scrollbar {
		width: 10px;
	}

	::-webkit-scrollbar-thumb {
		background-color: #facdad;
		border-radius: 10px;
	}
</style>
