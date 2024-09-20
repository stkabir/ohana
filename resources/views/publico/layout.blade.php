<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('descripcion', 'Descripcion')" />
    <meta name="keywords" content="@yield('keywords', 'keywords')" />
    <title>@yield('titulo', 'Sitio Stay True')</title>
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
                    <a class="navbar-brand" href="#">icono</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
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
								<form class="container">
									<div class="row py-2">
										<div class="col-auto">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
												<label class="form-check-label" for="flexRadioDefault1">
												  Ida y vuelta
												</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
												<label class="form-check-label" for="flexRadioDefault2">
												  Solo ida
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-4 py-2">
											<select class="form-select" aria-label="Default select example">
												<option selected>- Tipo de servicio -</option>
												<option value="1">Aeropuerto a hotel</option>
												<option value="2">Hotel a aeropuerto</option>
												<option value="3">Hotel a hotel</option>
											</select>
										</div>
										<div class="col-6 col-sm-4 py-2">
											<select class="form-select" aria-label="Default select example">
												<option selected>- Origen -</option>
											</select>
										</div>
										<div class="col-6 col-sm-4 py-2">
											<select class="form-select" aria-label="Default select example">
												<option selected>- Destino -</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-sm-3 py-2">
											<input class="form-control" type="text" placeholder="Fecha ida" aria-label="default input example">
										</div>
										<div class="col-6 col-sm-3 py-2">
											<input class="form-control" type="text" placeholder="Fecha vuelta" aria-label="default input example">
										</div>
										<div class="col-6 col-sm-3 py-2">
											<select class="form-select" aria-label="Default select example">
												<option selected>-Adultos -</option>
											</select>
										</div>
										<div class="col-6 col-sm-3 py-2">
											<select class="form-select" aria-label="Default select example">
												<option selected>- Menores -</option>
											</select>
										</div>
									</div>
									<div class="pt-3 text-center">
										<buton class="btn btn-primary">Buscar</buton>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </header>
        <main class="pb-4">
			<div class="container-xxl pt-4">
				<h1>Tours</h1>
			</div>
			<div class="container-fluid">
				cards de 4 o 6 productos destacados
			</div>
			<div class="container-xxl pt-4">
				<h1>Hoteles</h1>
			</div>
			<div class="container-fluid">
				cards de 4 o 6 productos destacados
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
