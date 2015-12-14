@extends('pages/app')

@section('title', 'Login')

@section('login-bar')
<div class="login-bar">
  <div class="container">
    <form method="post">
      {!! csrf_field() !!}
      <div class="row">
        <div class="form-group">
          <div class="col-md-4">
            <label for="email">Email</label>
          <input class="form-control" id="email" name="email" type="email" placeholder="johnsmith@gmail.com" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Something  secret!" />
          </div>
        </div>
        <button class="btn btn-success" type="submit">Login</button>
        <a href={{ url('auth/register') }}><div class="btn btn-primary">Register</div></a>
      </div>
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