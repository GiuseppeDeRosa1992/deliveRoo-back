<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>


	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Usando Vite -->
	@vite(['resources/js/app.js'])
</head>

<body>
	<div id="app">
		<div id="loader">
			<div class="d-flex justify-content-center align-items-center vh-100">
				<img src="{{ asset('img/logo-completo.png') }}" alt="" class="loader">
			</div>
		</div>
		<main id="content" class="my_bg_grey" style="display: none">
			@yield('content')
		</main>
	</div>
	<script>
		window.addEventListener('load', function() {
			setTimeout(() => {
				document.getElementById('content').style.display = 'block';
				document.getElementById('loader').style.display = 'none';
			}, 1500);
		})
	</script>
</body>

</html>

<style scoped>
	.my_bg_grey {
		background-color: #f2f3f7;
		min-height: 100vh;
	}

	/* ANIMAZIONE LOADER */
	.loader {
		animation: loader 1.8s ease infinite;
		height: 6rem;
	}

	@keyframes loader {
		30% {
			transform: scale(1.2);
		}

		40%,
		60% {
			transform: rotate(-20deg) scale(1.2);
		}

		50% {
			transform: rotate(20deg) scale(1.2);
		}

		70% {
			transform: rotate(0deg) scale(1.2);
		}

		100% {
			transform: scale(1);
		}
	}
</style>
