@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')
<style>
.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 24px;
    padding-left: 7rem;
    padding-right: 7rem;
    width: 100%;
}

.card {
    position: relative;
    list-style: none;
    height: 450px;
}

.card_image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    transform: scale(1) translateZ(0);
    transform-origin: center;
    transition-duration: 200ms;
    transition-timing-function: linear;
}

.card:hover {
    transform: scale(1.02) translateZ(0);
}

.card_content {
    position: absolute;
    top: 0;
    left: 0;
    padding: 24px;
}

.card_content .card_category {
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase;
    font-size: 1.2rem;
}

.card_content .card_title {
    color: rgba(255, 255, 255, 0.9);
    font-size: 2.5rem;
    line-height: 1.4;
    word-spacing: 100vw;
    text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
}

.card_status {
    font-size: 1.3rem;
    font-weight: 600;
}

.red {
    color: red;
}

.orange {
    color: orange;
}

.green {
    color: #25d64b;
}

.filter-section {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-top: 2rem;
    padding-right: 7rem;
    padding-bottom: 2rem;
}

.filter-select {
    width: 20rem;
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

</style>

<section class="filter-section">
    <select class="filter-select">
        <option value="All">All</option>
        @foreach ($categories as $category)
            <option value={{$category->category}}>{{$category->category}}</option>               
        @endforeach
    </select>
</section> 

<section class="card-container">
    <div class="card-grid">
        @foreach($products as $product)
        <a class="card" href="/products/{{$product->id}}">
            <div class="card_image" style="background-image: url('{{asset(str_replace('public', 'storage', $product->image))}}')"></div>
            <div class="card_content">
                <p class="card_category">{{$product->category}}</p>
                <h2 class="card_title">{{$product->name}}</h3>
                @if($product->status == 'Lend Out')
                    <p class="card_status red">{{$product->status}}</p>
                @elseif($product->status == 'Returning')
                    <p class="card_status orange">Soon Available</p>
                @else
                    <p class="card_status green">{{$product->status}}</p>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection