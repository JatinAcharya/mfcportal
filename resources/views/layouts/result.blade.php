@extends('layouts.app')

@section('content')

<div class="container">
    @if($percent <=30)
    <div class="card" style="background-color: #34eb77;">
        <div class="card-body">
            You have answered {{$noOfQuestionAnswered}} questions out of 10 and you have {{$percent}} chances of having mental illness.
        </div>
    </div>
    @else 
        @if($percent>30 & $percent <= 60)
        <div class="card" style="background-color: #ede85a;">
            <div class="card-body">
            You have answered {{$noOfQuestionAnswered}} questions out of 10 and you have {{$percent}} chances of having mental illness.
            </div>
        </div>
        @else
        <div class="card" style="background-color: #eb4034;">
        <div class="card-body">
        You have answered {{$noOfQuestionAnswered}} questions out of 10 and you have {{$percent}} chances of having mental illness.
        </div>
        </div>
        @endif
    @endif
    <br><br>
    @if($percent <=30)
    <div class="card">
        <div class="card-header">
            Good Mental Health
        </div>
        <div class="card-body">
            <h5 class="card-title">Treatment</h5>
            <p class="card-text">You have very good mental health continue your way of life style</p>
            <a href="/doctor" class="btn btn-primary">Contact Doctor</a>
        </div>
    </div>
</div>
    @else 
        @if($percent>30 & $percent <= 60)
        <div class="card">
        <div class="card-header">
            Average Mental Health
        </div>
        <div class="card-body">
            <h5 class="card-title">Treatment</h5>
            <p class="card-text">you have a mild case of mental illness please visit doctor nearby before it gets worse or go through list of treatments suggested by our doctors</p>
            <a href="/doctor" class="btn btn-primary">Contact Doctor</a>
        </div>
    </div>
</div>
        @else
        <div class="card">
        <div class="card-header">
            Bad Mental Health
        </div>
        <div class="card-body">
            <h5 class="card-title">Treatment</h5>
            <p class="card-text">You have a very bad case of mental illness please visit a nearby Doctor or go through the treatments provided by our Doctors</p>
            <a href="/doctor" class="btn btn-primary">Contact Doctor</a>
        </div>
    </div>
</div>
        @endif
    @endif
   

@endsection