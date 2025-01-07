<aside id="sidebar">
    <div class="d-flex">
        <div class="sidebar-logo">
            <a href="#">Stay True</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.home') }}" class="sidebar-link {{ Route::is('dashboard.home') ? 'active' : '' }}">
                <i class="bi bi-house"></i>
                Inicio
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.zona') }}" class="sidebar-link {{ Route::is('dashboard.zona') ? 'active' : '' }}">
                <i class="bi bi-pin-map"></i>
                Zonas
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.lugar') }}" class="sidebar-link {{ Route::is('dashboard.lugar') ? 'active' : '' }}">
                <i class="bi bi-buildings"></i>
                Hoteles
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.servicio') }}" class="sidebar-link {{ Route::is('dashboard.servicio') ? 'active' : '' }}">
                <i class="bi bi-card-list"></i>
                Servicios
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.unidad') }}" class="sidebar-link {{ Route::is('dashboard.unidad') ? 'active' : '' }}">
                <i class="bi bi-truck"></i>
                Unidades
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.tarifa') }}" class="sidebar-link {{ Route::is('dashboard.tarifa') ? 'active' : '' }}">
                <i class="bi bi-coin"></i>
                Tarifas
            </a>
        </li>
        <li class="sidebar-item">
            <a wire:navigate href="{{ route('dashboard.reserva') }}" class="sidebar-link {{ Route::is('dashboard.reserva') ? 'active' : '' }}">
                <i class="bi bi-book"></i>
                Reservas
            </a>
        </li>
        <!-- <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-protection"></i>
                <span>Auth</span>
            </a>
            <ul id="auth" class="list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Register</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                <i class="bi bi-layout"></i>
                Multi Level
            </a>
            <ul id="multi" class="list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                        data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                        Two Links
                    </a>
                    <ul id="multi-two" class="list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Link 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> -->
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="bi bi-box-arrow-left"></i>
            Logout
        </a>
    </div>
</aside>