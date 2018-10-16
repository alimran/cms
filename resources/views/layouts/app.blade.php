<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            App Logo
          </a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Learn</a></li>
          <li><a href="#">Discuss</a></li>
          <li><a href="#">Share</a></li>
        </ul>
        @if(Auth::guest())
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Join the Community</a></li>
          </ul>
        @else
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hey Alex
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-user-circle-o"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bell"></i> Notifications</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        @endif
      </div>
    </nav>

        @yield('content')

    </div>
</body>
</html>
