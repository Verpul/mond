<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>МОНД</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/data/data.js') }}" defer></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
      <div class="row m-1">
        <ul class="col-1 nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{route('data.index')}}">Данные</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('eds.index')}}">ЭЦП</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tokens.index')}}">Токены</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Задачи</a>
          </li>
        </ul>
        <div class="col-11">
            @yield('content')
        </div>
      </div>
    </div>
</body>
</html>
