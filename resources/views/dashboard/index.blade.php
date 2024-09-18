@extends('dashboard.layout')
@section('titulo', Route::currentRouteName())
@section('descripcion', Route::currentRouteName().' descripcion')
@section('keywords', Route::currentRouteName().' keywords')
@section('styles')
{{-- meta tags --}}

{{-- css --}}

@endsection
@section('contenido') {{-- contenido vista --}}
    <div class="text-center">
        <h3>{{ Route::currentRouteName() }}</h3>
    </div>
    @livewire($component)
@endsection
@push('scripts')

{{-- <script>
    window.addEventListener('close-modal', event => {
        $('#deleteStudentModal').modal('hide');
    })
</script> --}}
@endpush