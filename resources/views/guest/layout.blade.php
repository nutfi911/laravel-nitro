<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nitro - @yield('title')</title>
    <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{ URL::asset('img/logo.png') }}" alt="Nitro Logo Brand" style="width:auto;height:42px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Начало
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li><a class="nav__link nav__link--btn btn--show-modal" href="/">Начало</a></li>
                    @guest
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('listAll')}}">Автомобили</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('memberSettings')}}">Потребителски панел</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Изход</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    <script src="/frontend/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/moment.js"></script>
    <script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @include('sweetalert::alert')

    <script src="{{ URL::asset('js/welcome.js') }}">
    </script>
</body>

</html>