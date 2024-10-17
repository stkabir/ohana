<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('descripcion', 'Descripcion')" />
    <meta name="keywords" content="@yield('keywords', 'keywords')" />
    <title>@yield('titulo', 'Sitio Stay True')</title>
	@livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" />
</head>

<body>
    <div class="text-bg-light d-flex flex-column min-vh-100">
		@yield('contenido')
        <footer class="text-bg-secondary mt-auto"> 
			<div class="container-xxl pt-4">
				<div class="row">
					<div class="col-sm-4">
						<h2>Productos</h2>
					</div>
					<div class="col-sm-4">
						<h2>Mapa de sitio</h2>
					</div>
					<div class="col-sm-4">
						<h2>Terminos y condiciones</h2>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-sm-6">
						<h2>Redes sociales</h2>
					</div>
					<div class="col-sm-6">
						<h2>Información de contacto</h2>
					</div>
				</div>
				<div class="text-center">
					<p>Todos los derechos reservados</p>
				</div>
			</div>
        </footer>
    </div>
	@livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
