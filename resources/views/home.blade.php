@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                @if (Auth::guest())
                <div class="panel-body">
                    You are not logged in.
                </div>
                @else
                <div class="panel-body">
                    You are logged in.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
