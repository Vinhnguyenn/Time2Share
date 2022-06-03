@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')
<style>
li {
    list-style: none;
}

.gridCard {
    margin: 3rem;
    padding-bottom: 2rem;
    width: 30rem;
    height: 43rem;
    background: #121212;
    border: 1px solid #3E3E3E;
    border-radius: 5px;
}

.gridCard__image{
    width: 100%;
    height: 70%;
}

.gridCard__image img {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gridCard__content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: left;
    padding: 2rem;
    width: 40rem;
    height: auto;
}

.gridCard__title {
    font-size: 1.8rem;
    color: white;
}

.gridCard__category {
    font-size: 1.2rem;
    color: #B8B8B8;
    margin-bottom: 1rem;
}

.gridCard__description {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: white;
}

.red {
    font-size: 1.3rem;
    color: red;
}

.orange {
    font-size: 1.3rem;
    color: orange;
}

.green {
    font-size: 1.3rem;
    color: green;
}
</style>


<li data-product-category="{{$product->category}}">
    <div class="gridCard">
        <a href="/products/{{$product->id}}">
        <div class="gridCard__image">
            <img src="{{asset(str_replace('public', 'storage', $product->image))}}" alt="Photo of {{$product->name}}">
        </div>
        <div class="gridCard__content">
            <h2 class="gridCard__title">{{$product->name}}</h3>
            <p class="gridCard__category">{{$product->category}}</p>
            <p class="gridCard__description">{{$product->description}}</p>
            @if($product->status == 'Lend Out')
                    <p class="red">{{$product->status}}</p>
                @elseif($product->status == 'Returning')
                    <p class="orange">Soon Available</p>
                @else
                    <p class="green">{{$product->status}}</p>
                @endif
        </div>
    </div>
</li>
@endsection