@extends('pages/app')

@section('title', 'Login')

@section('content')
<h1>Login to Nudj!</h1>
<p>Enter your details below to log in to your account.</p>
<form method="post">
  <div class="row">
    <div class="col-md-12">
      <label>
      Email Address
      <input class="form-control" type="text" placeholder="John Doe">
      </label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <label>
      Password
      <input class="form-control" type="password" placeholder="John Doe">
      </label>
    </div>
  </div>
</form>
@stop