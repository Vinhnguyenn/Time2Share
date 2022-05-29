@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
    
</style>

<body>
    <div class="container">
        <div class="card-content">
            <div class="card-title">
                <h1>test {{ Auth::user()->name }}!</h1>
            </div>
        </div>
    </div>
</body>
@endsection('content')
