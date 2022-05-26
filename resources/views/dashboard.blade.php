@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')



<body>
    <div class="container">
        <div class="card-content">
            <div class="card-title">
                <h1>Welcome back {{ Auth::user()->name }}!</h1>
            </div>
        </div>
    </div>
</body>
@endsection('content')
