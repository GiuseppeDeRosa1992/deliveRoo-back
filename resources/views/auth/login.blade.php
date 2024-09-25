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
					<div class="card-header">{{ __('Accedi') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('login') }}">
							@csrf

							<div class="mb-4 row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo E-Mail') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email" autofocus>

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
										name="password" required autocomplete="current-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<div class="col-md-6 offset-md-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember"
											{{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Ricordami') }}
										</label>
									</div>
								</div>
							</div>

							<div class="mb-4 row mb-0">
								<div class="col-md-8 offset-md-4">
									<button type="submit" class="btn btn-primary my_orange">
										{{ __('Accedi') }}
									</button>

									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Hai Dimenticato la Password?') }}
										</a>
									@endif
									<br>
									@if (Route::has('register'))
										<div class="mt-3">
											<span>Non sei ancora registrato ? </span>
											<a class="">
												<a class="" href="{{ route('register') }}"> {{ __('Registrati') }}</a>
											</a>
										</div>
									@endif
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="my-h position-relative">
		<img src="{{ asset('img/semplicibo.jpg') }}" alt="" class="opacity-1 h-100 position-absolute">
	</div>
@endsection

<style scoped>
	.my_bg_grey {
		background-color: #f2f3f7;
	}

	.my_orange {
		background-color: #FF9900 !important;
		border: none !important;
	}

	.form-control:focus {
		border-color: #facdad !important;
		box-shadow: 0 0 0 0.25rem #facdad !important;
	}

	.form-check-input:checked {
		background-color: #FF9900 !important;
		border-color: #facdad !important;
	}

	.form-check-input:focus {
		border-color: #facdad !important;
		box-shadow: 0 0 0 0.25rem #facdad !important;
	}

	div.my-h {
		margin-top: 9rem;
		height: 10rem;

		img {
			animation: moveleft 4s linear infinite;
		}
	}

	@keyframes moveleft {
		0% {
			left: 0%;
		}

		25% {
			left: 22%;
		}

		50% {
			left: 44%;
		}

		75% {
			left: 66%;
		}

		100% {
			left: 88%;
		}
	}

	@media all and (max-width:1800px) {
		div.my-h {
			margin-top: 4rem;
		}

		@keyframes moveleft {
			0% {
				left: 0%;
			}

			25% {
				left: 21.25%;
			}

			50% {
				left: 42.5%;
			}

			75% {
				left: 63.75%;
			}

			100% {
				left: 85%;
			}
		}
	}
</style>
