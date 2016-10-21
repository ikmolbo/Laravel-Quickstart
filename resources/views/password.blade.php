@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row profile">
		<div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{ $user->avatar }}" width="30" class="img-circle"> {{ $user->name }}
        </div>
        <div class="list-group list-group-flush">
          <a class="list-group-item divider active" href="">My profile</a>
          <a class="list-group-item">Change password</a>
          <a class="list-group-item" href="{{ url('logout') }}">Log out</a>
        </div>
      </div>
	   </div>
		 <div class="col-md-9">
       <div class="profile-content">
         <form class="form" role="form" method="POST" action="{{ url('/account/password') }}">
             {{ csrf_field() }}

             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 <label for="password" class="col-md-4 control-label">Password</label>

                 <div class="col-md-6">
                     <input id="password" type="password" class="form-control" name="password" required>

                     @if ($errors->has('password'))
                         <span class="help-block">
                             <strong>{{ $errors->first('password') }}</strong>
                         </span>
                     @endif
                 </div>
             </div>

             <div class="form-group">
                 <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-primary">
                         Register
                     </button>
                 </div>
             </div>
         </form>
       </div>
		</div>
	</div>
</div>

@endsection
