@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
.back-link {
    font-size: 1.3rem;
    padding-left: 7rem;
    font-weight: 500;
}
</style>

<a class="back-link" href="/products">Back to Products</a>
@include('products.card')   
<h2 class="review-section">Reviews</h2>
@include('reviews.reviews')
@endsection