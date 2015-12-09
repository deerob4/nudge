<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nudj - @yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/flatly/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Nudj!</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Hey</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Wow</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="ui container">
    @yield('content')
  </div>
</body>
</html>