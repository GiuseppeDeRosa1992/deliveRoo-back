<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fontawesome 6 cdn -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
		integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
		crossorigin='anonymous' referrerpolicy='no-referrer' />

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- bootastrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Usando Vite -->
	@vite(['resources/js/app.js'])
	@yield('style')
</head>

<body>
	<div id="app">

		<div class="container-fluid vh-100">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block navbar-light sidebar">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">

							<li class="nav-item mt-2">
								<a
									class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.dashboard' ? 'my_salmon' : '' }}"
									href="{{ route('admin.dashboard') }}">
									<i
										class="fa-solid fa-house fa-lg fa-fw {{ Route::currentRouteName() == 'admin.dashboard' ? 'my_orange' : '' }}"></i>
									<span>Dashboard</span>
								</a>
							</li>

							<li class="nav-item mt-2">
								<a
									class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.orders.index' ? 'my_salmon' : '' }}"
									href="{{ route('admin.orders.index') }}">
									<i
										class="fa-solid fa-clipboard fa-lg fa-fw {{ Route::currentRouteName() == 'admin.orders.index' ? 'my_orange' : '' }}"></i>
									<span>Orders</span>
								</a>
							</li>

							<li class="nav-item mt-2">
								<a
									class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.products.index' || Route::currentRouteName() == 'admin.products.create' || Route::currentRouteName() == 'admin.products.edit' ? 'my_salmon' : '' }}"
									href="{{ route('admin.products.index') }}">
									<i
										class="fa-solid fa-utensils fa-lg fa-fw {{ Route::currentRouteName() == 'admin.products.index' || Route::currentRouteName() == 'admin.products.edit' || Route::currentRouteName() == 'admin.products.create' ? 'my_orange' : '' }}"></i>
									<span>Menus</span>
								</a>
							</li>

							<li class="nav-item mt-2">
								<a
									class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.analytics.index' ? 'my_salmon' : '' }}"
									href="{{ route('admin.analytics.index') }}">
									<i
										class="fa-solid fa-chart-line fa-lg fa-fw {{ Route::currentRouteName() == 'admin.analytics.index' ? 'my_orange' : '' }}"></i>
									<span>Analysis</span>
								</a>
							</li>

							<li class="nav-item mt-2">
								<a class="nav-link my_textdark rounded-pill" href="{{ route('login') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> <span>{{ __('Logout') }}</span>
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>

						</ul>

					</div>
				</nav>

				<main class="col-md-9 ms-sm-auto col-lg-10 my_bg_grey ">
					@yield('content')
				</main>
			</div>
		</div>

	</div>
</body>

</html>

<style scoped>
	.my_salmon {
		background-color: #facdad;
	}

	.my_orange {
		color: #FF9900;
	}

	a:hover {
		color: #FF9900 !important;

	}


	.my_textdark {
		color: black
	}

	.my_bg_grey {
		background-color: #f2f3f7;
	}

	@media all and (max-height: 730px) {
		.nav-item span {
			display: none;
		}

		.nav-item a {
			padding: 0.7em 0.3rem;
		}

		#sidebarMenu ul {
			flex-direction: row !important;
			justify-content: space-between;
		}

		.position-sticky {
			padding-top: 0;
			padding-bottom: 0.5rem;
		}
	}

	@media all and (max-height: 992px) {}
</style>
