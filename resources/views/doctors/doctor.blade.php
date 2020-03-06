@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 card cust">
            <div class="row">
                <div class="col-md-3" style="height:230px">
                    <img src="{{ asset('images/default_profile.png') }}" class="img" alt="noimg" width=200px height=200px>
                </div>
                <div class="col-md-5 cust"> 
                    <h3 class="txt">Name : ABC</h3>
                    <h3 class="txt">Qualification : M.B.B.S</h3>
                    <h3 class="txt">Contact : 32165498717</h3>
                    <h3 class="txt">Address : Address 1</h3>
                </div>    
            </div>
        </div>
        <div class="col-md-12 card cust">
            <div class="row">
                <div class="col-md-3" style="height:230px">
                    <img src="{{ asset('images/default_profile.png') }}" class="img" alt="noimg" width=200px height=200px>
                </div>
                <div class="col-md-5 cust"> 
                    <h3 class="txt">Name : PQR</h3>
                    <h3 class="txt">Qualification : M.B.B.S</h3>
                    <h3 class="txt">Contact : 1234567891</h3>
                    <h3 class="txt">Address : Address 2</h3>
                </div>    
            </div>
        </div>        
        <div class="col-md-12 card cust">
        <div class="row">
            <div class="col-md-3" style="height:230px">
                <img src="{{ asset('images/default_profile.png') }}" class="img" alt="noimg" width=200px height=200px>
            </div>
            <div class="col-md-5 cust"> 
                <h3 class="txt">Name : LMR</h3>
                <h3 class="txt">Qualification : M.B.B.S</h3>
                <h3 class="txt">Contact : 9874561231</h3>
                <h3 class="txt">Address : Address 3</h3>
            </div>    
        </div>
    </div>
    <div class="col-md-12 card cust">
        <div class="row">
            <div class="col-md-3" style="height:230px">
                <img src="{{ asset('images/default_profile.png') }}" class="img" alt="noimg" width=200px height=200px>
            </div>
            <div class="col-md-5 cust"> 
                <h3 class="txt">Name : DEF</h3>
                <h3 class="txt">Qualification : M.B.B.S</h3>
                <h3 class="txt">Contact : 5874691231</h3>
                <h3 class="txt">Address : Address 4</h3>
            </div>    
        </div>
    </div>
    <div class="col-md-12 card cust">
        <div class="row">
            <div class="col-md-3" style="height:230px">
                <img src="{{ asset('images/default_profile.png') }}" class="img" alt="noimg" width=200px height=200px>
            </div>
            <div class="col-md-5 cust"> 
                <h3 class="txt">Name : ERR</h3>
                <h3 class="txt">Qualification : M.B.B.S</h3>
                <h3 class="txt">Contact : 6987451238</h3>
                <h3 class="txt">Address : Address 5</h3>
            </div>    
        </div>
    </div>
    </div>
</div>


@endsection