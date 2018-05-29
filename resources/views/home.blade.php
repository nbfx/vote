@extends('layouts.app')

@section('content')
    @if($service == 'google')
        <div class="title m-b-md">
            Welcome {{ $details->user['name']}} ! <br>
            Your email is : {{ $details->user['email'] }} <br>
            You are {{ $details->user['gender'] }}.
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
