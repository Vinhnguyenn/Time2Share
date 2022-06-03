@extends('default')

@section('content')
<style>
    .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.title {
    padding: 2rem;
}

.product-card {
    display: flex;
    justify-content: center;
    padding: 2rem;
    margin: 3rem;
    width: 50rem;
    height: auto;
    background: #121212;
    border: 1px solid #3E3E3E;
    border-radius: 5px;
}

.form-group {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: left;
    padding: 1rem;
    width: 45rem;
}

.form-group label {
    font-size: 1.5rem;
    color: #B8B8B8;
    margin-bottom: 0.5rem;
}

.form-group textarea {
    padding-top: 1rem;
    height: 7rem;
}

.form-control {
    width: 100%;
    height: 3rem;
    border-radius: 5px;
    border: none;
    background-color: #1E1E1E;
    color: white;
    font-size: 1.4rem;
    padding-left: 1rem;
    font-family: 'SF Pro Display', sans-serif;
    letter-spacing: 0.5px;
    transition: all ease 0.2s;
}

.form-btn {
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

.form-btn:hover {
    background-color: #007ED9;
}
</style>

<div class="container">
    <h1 class="title">Write a review</h1>
    <div class="product-card">
        <form action="/review" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_name">Product</label>
                <select type='text'name="product_name" id="product_name" class="form-control">
                    <option>Select a category</option>
                    @foreach ($products as $product)
                        <option value='{{$product->name}}'>{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="review_content">Review</label>
                <textarea name="review_content" id="review_content" class="form-control" placeholder="Type your review here.."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" value="Send" class="form-btn">Submit review</button>
            </div>
        </form>
    </div>
</div>
@endsection