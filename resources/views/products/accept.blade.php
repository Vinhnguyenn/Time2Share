@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
.container {
    display: flex;
    justify-content: center;
    margin-top: 5rem;
}

.content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
}

.content h1 {
    font-size: 2.5rem;
    color: white;
    padding-bottom: 1rem;
}

.content p {
    font-size: 1.5rem;
    color: white;
    padding-bottom: 1rem;
}

.btns {
    margin-top: 2rem;
}

.btns a {
    border-radius: 5px;
    font-size: 1.4rem;
    padding: 1rem 2rem 1rem 2rem;
    background-color: green;
    color: white;
}
</style>

<div class="container">
    <div class="content">
        <h2>Item has been accepted</h2>
        <p>You have accepted the return, everything else will be handled by us.</p>
        <div class="btns">
        <a class="button active redirect" href="/">Go to Home</a>
        <a class="button active redirect" href="/dashboard">Go to Account</a>
        </div>
    </div>
</div>
@endsection