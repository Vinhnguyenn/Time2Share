@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
.dashboard-headers {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.dashboard-placeholder {
    text-align: center;
    font-size: 2rem;
    font-weight: 400;
    padding-bottom: 5rem;
}

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

.card_return {
    font-size: 1.3rem;
    font-weight: 600;
    color: white;
}

.card_buttons {
    position: relative;
    display: flex;
    padding-top: 10rem;
    padding-left: 2rem;
}

.button {
    position: absolute;
    border-radius: 5px;
    font-size: 1.4rem;
    padding: 1rem 2rem 1rem 2rem;
    background-color: green;
    color: white;
    border: none;
    width: 14rem;
    transition: all 0.2s ease-in-out;
}

.active:hover {
    cursor: pointer;
    background-color: #00aa00;
}

.disabled {
    background-color: #cccccc;
    color: #cccccc;
    cursor: not-allowed;
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
</style>

@if($user->role == 'Admin')
    <a class="manage-link" href="/manage">Manage</a>
@endif
<h2 class="dashboard-headers">Lend Products</h2>
<ul class="card-wrapper">
    @if(count($lend_products) != 0)
    <div class="card-container">
        @if($user->role == 'Admin')
            <a class="manage-link" href="/manage">Manage</a>
        @endif
        <div class="card-grid">
            @foreach($lend_products as $lend_product)
            <a class="card" href="/products/{{$lend_product->id}}">
                <div class="card_image" style="background-image: url('{{asset(str_replace('public', 'storage', $lend_product->image))}}')"></div>
                <div class="card_content">
                    <p class="card_category">{{$lend_product->category}}</p>
                    <h2 class="card_title">{{$lend_product->name}}</h2>
                    <p class="card_return">Return date: {{$lend_product->return_date}}</p>
                </div>
                <div class="card_buttons">
                    @if($lend_product->status == 'Returning')
                        <form>
                            @csrf
                            <input class="button disabled" type="submit" value="Lend">
                        </form>
                    @else
                    <form method="post" action="/return/{{$lend_product->id}}">
                        @method('PATCH')
                        @csrf
                        <input class="button active" type="submit" value="Return">
                    </form>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>
    @else
        <p class="dashboard-placeholder">There are no lend items</p>
    @endif
</ul>

<h2 class="dashboard-headers">Owned Products</h2>
<div class="card-grid">
    @foreach($products as $product)
        <a class="card" href="/products/{{$product->id}}">
            <div class="card_image" style="background-image: url('{{asset(str_replace('public', 'storage', $product->image))}}')"></div>
            <div class="card_content">
                <p class="card_category">{{$product->category}}</p>
                <h2 class="card_title">{{$product->name}}</h2>
                @if($product->status == 'Lend Out')
                    <p class="red">{{$product->status}}</p>
                @elseif($product->status == 'Returning')
                    <p class="orange">{{$product->status}}</p>
                @else
                    <p class="green">{{$product->status}}</p>
                @endif
            </div>
            @if ($product->status == 'Returning')
                <div class="card_buttons">
                    <form method="post" action="/return/accept/{{$product->id}}">
                        @method('PATCH')
                        @csrf
                        <input class="button active" type="submit" value="Accept Return">
                    </form>
                </div>
            @endif 
        </a>
    @endforeach
</div>
@endsection('content')