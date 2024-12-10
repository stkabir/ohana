@extends('publico.layout')
@section('titulo', 'Home')
@section('descripcion', 'Home descripcion')
@section('keywords', 'Home keywords')
@section('contenido')
<header>
    @livewire(Publico\Navegacion::class)
    @livewire(Publico\Carrusel::class)
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
@endsection
@section('scripts')

@endsection