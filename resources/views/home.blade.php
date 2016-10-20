@extends('layouts.app')

@section('content')

<div class="ui container">
  <div class="alert alert-warning" role="alert">
    @if (Auth::guest())
      <p>You are not logged in.
      <a class="alert-link" href="{{ url('login') }}">Log in here.</a></p>
    @else
      <p>You are logged in.</p>
    @endif
  </div>
</div>
</div>

<div class="container">
  <div class="card card-block">
    {!! Markdown::convertToHtml(File::get(base_path('readme.md'))) !!}
  </div>
</div>

@endsection
