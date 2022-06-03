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
        <h2>You have successfully returned the lend item</h2>
        <p>The item will be returned, we kindly ask you to leave a review for the owner to let them know about your experience.</p>
        <div class="btns">
        <a class="button active redirect" href="/">Go to Home</a>
        <a class="button active redirect" href="/review/create">Write a Review</a>
        </div>
    </div>
</div>
@endsection