@extends('publico.layout')
@section('titulo', 'Reservacion de traslado')
@section('descripcion', 'reservacion de traslado')
@section('keywords', 'reservacio, traslado')
@section('contenido')
<header class="pb-5">
    <div class="pb-5">
        @livewire(Publico\Navegacion::class)
    </div>
</header>
<main class="pb-4 pt-4">
    @livewire(Publico\ReservarTraslado::class)
</main>
@endsection
@section('scripts')

@endsection