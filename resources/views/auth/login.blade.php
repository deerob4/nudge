@extends('pages/app')

@section('title', 'Login')

@section('login-bar')
<div class="login-bar">
  <div class="container">
    <form method="post">
      {!! csrf_field() !!}
        <div class="form-group">
          <div class="col-md-4 col-xs-6" style="padding-left:0;">
            <input class="form-control" 
                   id="email"
                   name="email"
                   type="email" 
                   placeholder="Enter your email address" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 col-xs-6">
            <input class="form-control" 
                   id="password"
                   name="password"
                   type="password" 
                   placeholder="Enter your password" />
          </div>
        </div>
        <button class="btn btn-success" type="submit">Login</button>
        <a href={{ url('auth/register') }}><div class="btn btn-primary">Register</div></a>
    </form>
  </div>
</div>
@stop

@section('content')
<div class="jumbotron">
<h1>Interested in someone?</h1>
<h2 style="text-align:center;margin-bottom: 35px;margin-top: -20px;">Use nudj, the simplest way to get in touch!</h2>
<div class="row">
  <div class="col-md-6">
    <ol>
      <li class="promo">Give them a nudj by simply clicking on their picture.</li>
      <li class="promo">A tick will appear, and they'll receive an email alerting them to your nudj.</li>
      <li class="promo">If they like you, they'll get in touch with you through Facebook!</li>
      <li class="promo">If they haven't responded after a week, you can nudj them again.</li>
    </ol>
  </div>
  <div class="col-md-6">
    <div class="thumbnail"><img src={{ asset('img/promo.png') }} alt=""></div>
  </div>
    <h3>We're mobile friendly, so why not use us on the go?</h3>
</div>
@stop