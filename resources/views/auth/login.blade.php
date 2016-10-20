@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card card-block">
        <div class="row">
          <div class="col-md-6">

            <h3>Log in to your account</h3>

            <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>

                <p><button type="submit" class="btn btn-primary btn-block">Login</button></p>

                <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>

            </form>
          </div>

          <div class="col-md-6">
            <h3>Connect</h3>

            <p><a class="btn btn-default" href="{{ url('/redirect/google') }}">Log in with Google</a></p>
            <p><a class="btn btn-default" href="{{ url('/redirect/facebook') }}">Log in with Facebook</a></p>
            <p><a class="btn btn-default" href="{{ url('/redirect/strava') }}">Log in with Strava</a></p>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
@endsection
