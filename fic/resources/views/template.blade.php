
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FIC - Formaliza tu empresa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header class="">
            <nav class="navbar navbar-expand-lg bg-body-tertiary nav-bg-cs">
                <div class="container">
                    <a class="navbar-brand a-color-cs" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" class="h-16">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                        <a class="nav-link a-color-cs" href="{{ route('home') }}">{{__('Inicio')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link a-color-cs" href="{{ route('form') }}">{{__('Formalizar mi emprendimeinto')}}</a>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="a-color-link-cs a-color-link-cs__weight">
                                {{ __('Cerrar sesión') }}
                            </button>
                        </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link a-color-link-cs a-color-link-cs__weight" href="{{ route('register') }}">{{__('Crear cuenta')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link a-color-cs btn-primary-cs" href="{{ route('login') }}">{{__('Iniciar sesión')}}</a>
                            </li>
                        @endif
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

            <div class="container container-main-cs">
                @yield('content')
            </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>
