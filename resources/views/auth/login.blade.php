@extends('pages/app')

@section('title', 'Login')

@section('login-bar')
<div class="login-bar">
  <div class="container">
    <form method="post">
      {!! csrf_field() !!}
      <input class="d-control" name="email" type="email" placeholder="johnsmith@gmail.com" />
      <input class="d-control" name="password" type="password" placeholder="Something secret!" />
      <button class="btn btn-success" type="submit">Login</button>
      <button class="btn btn-primary">Register</button>
    </form>
  </div>
</div>
@stop

@section('content')
<div class="jumbotron">
<h1>Login to Nudj!</h1>
<p>Enter your details below to log in to your account.</p>
</div>
@stop