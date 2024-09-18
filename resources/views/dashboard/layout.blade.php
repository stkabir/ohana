<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('descripcion', 'Descripcion')"/>
	<meta name="keywords" content="@yield('keywords', 'keywords')"/>
	<title>@yield('titulo', 'Dashboard Stay True')</title>
	@include('dashboard.includes.css') {{-- css global --}}
	@yield('css') {{-- meta tags y css individuales --}}
</head>
<body>
    <div class="wrapper">
		@include('dashboard.includes.sidebar')
		<main class="main">
			@include('dashboard.includes.navbar')
			<div class="p-3">
				@yield('contenido')
			</div>
		</main>
		<footer>
			@include('dashboard.includes.footer')
		</footer>
	</div>
	@include('dashboard.includes.js') {{-- js global --}}
	@stack('scripts') {{-- js individual --}}
</body>
</html>