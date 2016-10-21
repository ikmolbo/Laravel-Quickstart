@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row profile">
		<div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{ $user->avatar }}" width="30" class="img-circle"> &nbsp;{{ $user->name }}
        </div>
        <div class="list-group list-group-flush">
          <a class="list-group-item divider {{ Route::currentRouteName() == "dashboard" ? 'active' : '' }}" href="{{ route('dashboard') }}">My profile</a>
          <a class="list-group-item {{ Route::currentRouteName() == "password" ? 'active' : '' }}" href="{{ route('password') }}">Change password</a>
          <a class="list-group-item" href="{{ url('logout') }}">Log out</a>
        </div>
      </div>
	   </div>
		 <div class="col-md-9">
        <div class="panel panel-body">

          @if(session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif

         @if(Route::currentRouteName() == "password")
           <form class="form" role="form" method="POST" action="{{ url('dashboard/password') }}">
             {{ csrf_field() }}
             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <label for="password">New password</label>
               <input id="password" type="password" class="form-control" name="password" required>
               @if ($errors->has('password'))
                   <span class="help-block">
                       <strong>{{ $errors->first('password') }}</strong>
                   </span>
               @endif
             </div>

             <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
               <label for="password-confirm">Confirm new password</label>
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                 @if ($errors->has('password_confirmation'))
                   <span class="help-block">
                       <strong>{{ $errors->first('password_confirmation') }}</strong>
                   </span>
                 @endif
             </div>

             <div class="form-group">
               <button type="submit" class="btn btn-primary">
                   Update password
               </button>
             </div>
         </form>
         @else
           <form class="form" role="form" method="POST" action="{{ url('dashboard/profile') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name">Name</label>
                   <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                   @if ($errors->has('name'))
                       <span class="help-block">
                           <strong>{{ $errors->first('name') }}</strong>
                       </span>
                   @endif
               </div>

               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="email">E-Mail Address</label>
                 <input disabled id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                 @if ($errors->has('email'))
                     <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
               </div>

               <div class="form-group">
                       <button type="submit" class="btn btn-primary">
                           Update profile
                       </button>
               </div>
           </form>
         @endif
       </div>
		</div>
	</div>
</div>

@endsection
