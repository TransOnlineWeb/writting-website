@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="font-weight-light">My Orders</h1>
                    <p class="lead3">A list of all your previous orders</p>
                </div>
            </div>
        </div>
    </header>
    <myorder></myorder>
@endsection
