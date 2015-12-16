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
<h2 style="text-align:center;margin-bottom: 35px;margin-top: -20px;">Use nudj to get in touch with them!</h2>
<div class="thumbnail">
  <div className="tick">
    <i className="fa fa-check-circle"></i>
  </div>
  <img src="http://lorempixel.com/250/250/people/">
</div>
<ol>
  <li class="promo">Give them a nudj by clicking on their picture</li>
  <li class="promo">A tick will appear on their picture, and they'll receive an email alerting them.</li>
  <li class="promo">Then simply wait until they contact you!</li>
</ol>
<h3>We're mobile friendly, so why not use us on the go?</h3>
@stop