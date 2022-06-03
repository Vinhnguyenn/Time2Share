<style>
    .review-card {
        border: 1px solid #3E3E3E;
        border-radius: 5px;
        padding: 1rem;
        width: 45rem;
        margin-top: -3rem;
    }

    .review-card__heading h2 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .review-card p {
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }
</style>


<section class="review-card">
    <section class="review-card__heading">
        <h2>{{$review->lender_email}}</h2>
        <p>{{$review->product_name}}</p>
    </section>
    <section class="review-card__body">
        <p>{{$review->review_content}}</p>
    </section>
</section>