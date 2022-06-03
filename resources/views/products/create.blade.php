@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

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

<body>
    <div class="container">
        <h1 class="title">Upload your product</h1>
        <div class="product-card">
            <form action="/product" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Product name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option>Select a category</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->category }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="file-input" type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" value="Send" class="form-btn">Create new listing</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection('content')