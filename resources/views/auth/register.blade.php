@extends('layouts.app')

@section('content')
	<div class="container pt-3">
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
						<form method="POST" action="{{ route('register') }}">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
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
										value="{{ old('email') }}" required autocomplete="email">

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

							<div class="mb-4 row mb-0">
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

<style scoped>
	.form-control:focus {
		border-color: #facdad !important;
		box-shadow: 0 0 0 0.25rem #facdad !important;
	}

	.my_orange {
		background-color: #FF9900 !important;
		border: none !important;
	}
</style>
