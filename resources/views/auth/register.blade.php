@extends('pages/app')

@section('title', 'Register')

@section('content')
<div class="jumbotron">
<h1>Create your Nudj Account!</h1>
<p>Enter your details below to create an account.</p>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="post" action="/auth/register">
  {!! csrf_field() !!}
  <h2>Basic Info</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="email">My email is:</label>
        <input class="form-control" id="email" name="email" type="email" placeholder="johnsmith@gmail.com" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="name">My name is:</label>
        <input class="form-control" id="name" name="name" type="text" placeholder="John Smith" />
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="password">I want my password to be:</label>
        <input class="form-control" id="password" name="password" type="password" placeholder="Something secret!" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="password_confirmation">My password again:</label>
        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Something secret!" />
      </div>
    </div>

  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="dob">And I was born on:</label>
        <input class="form-control" id="dob" name="dob" type="date" placeholder="Something secret!" />
      </div>
    </div>
  </div>

  <h2>Personal Info</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="sexuality">My sexuality is:</label>
        <select class="form-control" id="sexuality" name="sexuality">  
          <option value="straight">Straight</option>
          <option value="gay">Gay</option>
          <option value="lesbian">Lesbian</option>
          <option value="bisexual">Bisexual</option>
        </select>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="gender">My gender is:</label>
        <select class="form-control" id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="facebook_link">My Facebook URL is:</label>
        <input class="form-control" id="facebook_link" name="facebook_link" placeholder="facebook.com/johnsmith4" />  
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="photo_url">Enter a URL for your photo:</label>
        <input class="form-control" id="photo_url" name="photo_url" />
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary col-md-">
        Register
      </button>
    </div>
  </div>
</form>
</div>
@stop