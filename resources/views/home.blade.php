@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-md-12 col-sm-8" style="margin-left:auto;margin-right:auto">
    <h1 class="text-center" style="margin:4%">Welcome, {{ Auth::user()->name }}</h1>
    <a href="/quiz">
    <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-4 btn-success" style="margin: 0.5%;height:13em;margin-left:10%;margin-right:4%" data-toggle="modal">
        
        <div class="text-center name size">Take Test</div>
    </button>
    </a>
    <a href="/treatment">
    <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-4 btn-success" style="margin: 0.5%;height:13em;margin-left:15px;margin-right:1%" data-toggle="modal">
    <div class="text-center name size">Treatment</div>
    </button>
    </a>
    <a href="/doctor">
    <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-4 btn-success" style="margin: 0.5%;height:13em;margin-left:10%;margin-right:4%" data-toggle="modal">
    <div class="text-center name size">Doctor</div>
    </button>
    </a>
    <a href="/community">
    <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-4 btn-success" style="margin: 0.5%;height:13em;margin-left:15px;margin-right:1%" data-toggle="modal">
    <div class="text-center name size">Community</div>
    </button>
    </a>
</div>
@endsection
