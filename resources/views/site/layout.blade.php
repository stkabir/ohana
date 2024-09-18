<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('descripcion', 'Descripcion')"/>
	<meta name="keywords" content="@yield('keywords', 'keywords')"/>
	<title>@yield('titulo', 'Sitio Stay True')</title>
	@include('site.includes.css') {{-- css global --}}
	@yield('styles') {{-- meta tags y css individuales --}}
</head>
<body>
	<header>
		{{-- @include('site.includes.navbar') --}}
	</header>
	<main>
		@yield('contenido')
	</main>
	<footer>
		@include('site.includes.footer')
	</footer>
	@include('site.includes.js') {{-- js global --}}
	@stack('scripts') {{-- js individual --}}
</body>
</html>