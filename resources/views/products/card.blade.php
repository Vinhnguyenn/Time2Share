<style>
.card {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 5rem;
    padding: 2rem 7rem 7rem;
}

.card_image, .card_content {
    flex: 1;
}

.card_content {
    padding-top: 5rem;
}

.card_category {
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
    font-size: 1.4rem;
    padding-bottom: 0.5rem;
}

.card_title {
    font-size: 2.5rem;
    font-weight: 500;
}

.card_owner {
    font-size: 1.4rem;
    padding-bottom: 2rem;
}

.card_description {
    max-width: 45rem;
    line-height: 1.4;
    font-size: 1.4rem;
    padding-bottom: 2rem;
}

.card_image img {
    border-radius: 0.5rem;
}

.button {
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

.review-section {
    flex: 0 0 100%;  
}
</style>

<div class="card">
    <div class="card_image">
        <img src="{{asset(str_replace('public', 'storage', $product->image))}}" alt="Photo of {{$product->name}}">
    </div>
    <div class="card_content">
        <p class="card_category">{{$product->category}}</p>
        <h2 class="card_title">{{$product->name}}</h2>
        <p class="card_owner">{{$product->owner_email}}</p>
        <p class="card_description">{{$product->description}}</p>
        <div class="card_buttons">
            @if($product->status == 'Lend Out' || $product->status == 'Returning')
                <form>
                    @csrf
                    <input class="button disabled" type="submit" value="Lend">
                </form>
            @else
                <form method="post" action="/lend/{{$product->id}}">
                    @method('PATCH')
                    @csrf
                    <input class="button active" type="submit" value="Lend">
                </form>
            @endif
        </div>
</div>