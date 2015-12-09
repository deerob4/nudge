@extends('pages/app')

@section('title', 'Home')

@section('content')
<h1>Click on a face to Nudj them!</h1>
<div class="row">
    @foreach ($users as $user)
        <div class="col-md-4">
            <a href="/users/{{ $user->id }}" class="thumbnail">
                <img src="{{ $user->photo_url }}" alt="{{ $user->name }}">
            </a>
            {{ $user->name }}
        </div>
    @endforeach
</div>
@stop
