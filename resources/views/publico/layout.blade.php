<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('descripcion', 'Descripcion')" />
    <meta name="keywords" content="@yield('keywords', 'keywords')" />
    <title>@yield('titulo', 'Sitio Stay True')</title>
	@livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" />
</head>

<body>
    <div class="text-bg-light d-flex flex-column min-vh-100">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-xxl">
                    <a class="navbar-brand" href="#">
						<img src="{{ asset('logo.png') }}" height="75px"/>
					</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			<div id="carousel" class="carousel slide">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="{{ asset('temporal/img1.jpeg') }}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset('temporal/img2.jpg') }}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset('temporal/img3.jpg') }}" class="d-block w-100" alt="...">
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			</div>
			<div class="container-md p-0 buscador-principal">
				<div class="card">
					<div class="card-header pb-0 border-bottom-0 p-0">
						<ul class="nav nav-tabs" id="opcionesBuscadorPrincipal" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="form1Option" data-bs-toggle="tab" data-bs-target="#form1ContenidoBuscadorPrincipal" type="button" role="tab" aria-controls="form1ContenidoBuscadorPrincipal" aria-selected="true">
									Traslados
								</button>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="contenidoBuscadorPrincipal">
							<div class="tab-pane fade show active" id="form1ContenidoBuscadorPrincipal" role="tabpanel" aria-labelledby="form1Option" tabindex="0">
								@livewire(Publico\Buscador::class)
							</div>
						</div>
					</div>
				</div>
			</div>
        </header>
        <main class="pb-4">
			<div class="container-xxl pt-4">
				<h1>Unidades</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 py-3">
						<div class="card">
							<img src="{{ asset('temporal/van.jpg') }}" class="card-img-top" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Toyota Hiace</h5>
							  <p class="card-text">...</p>
							  <p>8 pax</p>
							</div>
						  </div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 py-3">
						<div class="card">
							<img src="{{ asset('temporal/van.jpg') }}" class="card-img-top" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Nissan Urvan</h5>
							  <p class="card-text">...</p>
							  <p>10 pax</p>
							</div>
						  </div>
					</div>
				</div>
			</div>
        </main>
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
