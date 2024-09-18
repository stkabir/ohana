<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" wire:model.live="nombre">
        <label for="floatingInput">Nombre</label>
        @error('nombre') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" wire:model.live="correo">
        <label for="floatingInput">Correo</label>
        @error('correo') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" wire:model.live="password">
        <label for="floatingInput">Contraseña</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" wire:model="password_confirmation">
        <label for="floatingInput">Confirmar contraseña</label>
        @error('password_confirmation') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid">
        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" wire:click.prevent="guardar">Crear cuenta</button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <span>¿Tienes cuenta?</span>
        <a class="btn btn-link" href="{{ route('login') }}" wire:navigate>Iniciar sesión</a>
    </div>
</div>