@extends('site.layout')
@section('titulo', 'Login')
@section('descripcion', 'Home descripcion')
@section('keywords', 'Home keywords')
@section('css')
{{-- meta tags --}}

{{-- css --}}
<style>
    .login {
        min-height: 100vh;
    }
    .bg-image {
        background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
        background-size: cover;
        background-position: center;
    }
    .login-heading {
        font-weight: 300;
    }
    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
    }
</style>
@endsection
@section('contenido') {{-- contenido vista --}}
<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Acceder</h3>
                            <form>
                                @livewire($component)
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{-- <script>
    window.addEventListener('close-modal', event => {
        $('#deleteStudentModal').modal('hide');
    })
</script> --}}
@endsection