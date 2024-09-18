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
        <input type="email" class="form-control" wire:model="correo">
        <label for="floatingInput">Correo</label>
        @error('correo') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" wire:model="password">
        <label for="floatingInput">Contraseña</label>
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid">
        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" wire:click.prevent="login">Iniciar sesión</button>
        {{-- <div class="text-center">
            <a class="small" href="#">Forgot password?</a>
        </div> --}}
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <span>¿No tienes cuenta?</span>
        <a class="btn btn-link" href="{{ route('register') }}" wire:navigate>Crear cuenta</a>
    </div>
    {{-- <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
        <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
    </div> --}}
</div>