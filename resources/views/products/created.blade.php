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

    /* .btns {
        width: 100%;
        height: 4rem;
        border-radius: 5px;
        border: none;
        background-color: #178FFF;
        color: white;
        font-size: 1.4rem;
        font-family: 'SF Pro Display', sans-serif;
        letter-spacing: 0.5px;
        transition: all ease 0.2s;
        cursor: pointer;
    }

    .btns:hover {
        background-color: #007ED9;
    } */
</style>

<div class="container">
    <div class="content">
        <h1>Listing has been succesfully uploaded</h1>
        <p>Thank you for putting up your products for others to lend! We appreciate you for using our service!</p>
        <div class="btns">
            <a class="" href="/">Go to Home</a>
            <a class="" href="/dashboard">Go to Account</a>
        </div>
    </div>
</div>
@endsection