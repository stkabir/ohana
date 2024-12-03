@extends('publico.layout')
@section('titulo', 'Busqueda de traslados')
@section('descripcion', 'Busqueda descripcion')
@section('keywords', 'busqueda keywords')
@section('contenido')
<header>
    <div class="pb-5">
        @livewire(Publico\Navegacion::class)
    </div>
    <div class="pt-5">
        @livewire(Publico\Buscador::class)
    </div>
</header>
<main class="pb-4">
    @livewire(Publico\Componentes\ResultadosTrasportes::class)
</main>
@endsection
@section('scripts')

@endsection