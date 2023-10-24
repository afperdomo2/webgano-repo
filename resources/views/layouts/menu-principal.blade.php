<div class="mb-3 row fixed-top" style="background-color: greenyellow;">

    <div class="col-sm-9">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div style="padding: 0vh; justify-content: center; margin-left: 5vw; margin-right: 4vw;">
                    <img src="{{ asset('img/logo.png') }}" alt="" style="height: 10vh;">
                </div>
                <a class="navbar-brand" href="/">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Artículos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Recetas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/products">Productos</a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Alimentos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Limpieza</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Cuidado Personal</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Cosmética</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Ropa y Calzado</a></li>
                            </ul>
                        </li> --}}


                    </ul>

                </div>
            </div>
        </nav>

    </div>
    <div class="col-sm-3">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="" style="margin-left: 2vw;"><strong>Crear
                            Reseñas</strong></a>
                @else
                    <a href="{{ route('login') }}" class="" style="margin-left: 2vw;"><strong>Iniciar Sesión</strong>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=""
                            style="margin-left: 2vw;"><strong>Registrarse</strong></a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
