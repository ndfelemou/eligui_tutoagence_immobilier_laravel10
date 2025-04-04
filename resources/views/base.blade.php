<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title') | Elite Immobilière de Guinée (ELIGUI)</title>

    <style>
        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-building"></i> ELIGUI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $route = request()->route()->getName();
            @endphp

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) aria-current="page" href="{{ route('property.index') }}">
                            Biens <i class="bi bi-house-door"></i>
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    @auth
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }} <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button class="dropdown-item">Deconnexion <i class="bi bi-lock"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endauth

                    @guest
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Mon Compte <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Se connecter</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">S'inscrire</a></li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
</body>

</html>
