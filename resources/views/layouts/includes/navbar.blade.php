<div class="collapse navbar-collapse" style="margin-right:100px ;"id="navbarCollapse">
    <div class="navbar-nav">
    </div>
    <div class="navbar-nav ml-auto">
        <a href="/" class="nav-item nav-link">Inicio</a>
        <a href="{{ route('mascotas.index') }}" class="nav-item nav-link"> Mascotas </a>
        <a href="{{ route('servicios') }}" class="nav-item nav-link"> Servicios </a>
        <a href="{{ route('veterinarios.index') }}" class="nav-item nav-link">Veterinarios </a>
        <a href="{{ route('contacto') }}" class="nav-item nav-link"> Contacto </a>
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
            </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->nombre }}
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dar_adopcion.index') }}" class="dropdown-item">Dar en adopción</a>
                {{--  <a href="{{ route('adoptados.index') }}" class="dropdown-item">Adoptados</a>  --}}
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            </li>
        @endguest
    </div>
</div>
