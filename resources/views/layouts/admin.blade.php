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

	<!-- Usando Vite -->
	@vite(['resources/js/app.js'])
</head>

<body>
	<div id="app">

		<div class="container-fluid vh-100">
			<div class="row h-100">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block navbar-light sidebar collapse">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">

							<li class="nav-item">
								<a
									class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.dashboard' ? 'my_salmon' : '' }}"
									href="{{ route('admin.dashboard') }}">
									<i class="fa-solid fa-house fa-lg fa-fw"></i>
									Dashboard
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.index' ? 'my_salmon' : '' }}"
									href="{{ route('admin.dashboard') }}">
									<i class="fa-solid fa-clipboard fa-lg fa-fw"></i> Order
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.show' ? 'my_salmon' : '' }}"
									href="{{ route('admin.dashboard') }}">
									<i class="fa-solid fa-utensils fa-lg fa-fw"></i> Menus
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link my_textdark rounded-pill {{ Route::currentRouteName() == 'admin.show' ? 'my_salmon' : '' }}"
									href="{{ route('admin.dashboard') }}">
									<i class="fa-solid fa-chart-line fa-lg fa-fw"></i> Analysis
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link my_textdark rounded-pill" href="{{ route('logout') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>

						</ul>

					</div>
				</nav>

				<main class="col-md-9 ms-sm-auto col-lg-10 ">
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
		background-color: #FF9900;
	}

	a:hover {
		color: #FF9900;
		!important
	}

	.my_textdark {
		color: black
	}
</style>
