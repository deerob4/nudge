<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href={{ asset('css/app.css') }}>
  <title>Nudge - @yield('title')</title>
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">nudj</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
            <li><a href={{ url('auth/logout') }}>Logout</a></li>
          @elseif(Request::path() === 'auth/login')
          @elseif(Request::path() === 'auth/register')
            <li><a href={{ url('auth/login') }}>Login</a></li>
          @else
            <li><a href={{ url('auth/login') }}>Login</a></li>
            <li><a href={{ url('auth/register') }}>Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  @yield('login-bar')

  <div class="ui container">
    @yield('content')
  </div>
</body>
</html>