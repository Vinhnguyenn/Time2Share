@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
    .card-title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 15rem;
    }
</style>

<body>
    <div class="container">
        <div class="card-content">
            <div class="card-title">
                <h1>Welcome {{ Auth::user()->name }}!</h1>
                <h2>This is Time2Share.</h2>
            </div>
        </div>
    </div>
</body>
@endsection('content')
