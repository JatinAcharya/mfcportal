@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="background-color:#456576;color:white;width:650px;height:650px;margin-left:20%">
    </div>
    <div class="card" style="background-color:black;width:650px;margin-left:20%">
    <div class="row">
    <div class="col-md-10">
        <input type="text" style="width:650px;margin-left:0%;height:37px;border:0;padding:0;background-color:#d3dde9">  
    </div>
    <div class="col-md-2">
    <button class="btn btn-dark" type="submit" style="width:100%;margin:0;"> 
    Send <i class="fa fa-location-arrow"></i>
    </button>    
    </div>
    </div>
        
    </div>
</div>

@endsection