@extends('default')
@section('title')   
    TimeToShare
@endsection('title')

@section('content')

<style>
*, *::before, *::after {
    padding: 0;
    margin: 0; 
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
}

body {
    font-family: 'SF Pro Display', sans-serif;
    background-color: black;
    color: white;
}

.logo {
    width: 20rem;
    height: auto;
}

.nav-wrapper {
    display: flex;
    justify-content: space-between;
    padding: 2.5rem 7rem;
}

.nav-wrapper ul {
    margin-left: 5rem;
    margin-top: 1rem;
}

.nav-wrapper li {
    display: inline-block;
    margin: 0 1rem;
}

.nav-wrapper li a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: all ease 0.2s;
}

.nav-wrapper li a:hover {
    color: #25d64b;
    cursor: pointer;
}

a {
    transition: all ease 0.2s;
    text-decoration: none;
    color: white;
}

a:hover {
    color: #25d64b;
    cursor: pointer;
}

/* .account-wrapper {
    margin-left: auto;
}

.account-wrapper button {
    width: 9rem;
    height: 3.2rem;
    border: none;
    border-radius: 5px;
    margin-left: 1rem;
    font-weight: 500;
    transition: all ease 0.7s;
}

.loginBtn {
    background: none;
    color: #25d64b;
}

.registerBtn {
    outline: 1px solid #25d64b;
    background-color: #25d64b;
    color: black;
} */

/* .account-wrapper button:hover {
    cursor: pointer;
    transform: scale(1.04)
} */

.logo-and-menu {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.search-wrapper {
    margin-left: 5rem;
    float: right;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 3rem;
}

.input-field {
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
}

.input-field input {
    height: 3rem;
    min-width: 30rem;
    border: none;
    border-radius: 5px;
    background-color: rgb(31, 31, 31);
    color: white;
    font-size: 1.2rem;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: all ease 0.2s;
}

.input-field input:focus {
    outline: none;
}

.input-field input[type=text] {
    padding-left: 4rem;
}

.input-field .label-icon {
    position: absolute;
    margin-left: 0.6rem;
}

.input-field .label-icon i {
    font-size: 2rem;
    color: grey;
    margin-top: 0.4rem;
}
</style>
<script>
    
</script>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="logo-and-menu">
                <a href="/"><img class="logo" src="{{ asset('img/timetoshare.svg') }}" alt="Logo"></a>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <!-- <div class="account-wrapper">
                <button class="loginBtn">Log In</button>
                <button class="registerBtn">Sign Up</button>
            </div> -->
            <div class="search-wrapper">
                <div class="input-field">
                    <input type="text" id="search" type="search" placeholder="Search for..">
                    <!-- <i class="material-icons">search</i> -->
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <!-- <i class="material-icons">close</i> -->
                </div>
                <label class="label-icon user" for="search"><a href="/login" class="material-icons">person</a></label>
            </div>
        </div>  
    </nav>
</body>
@endsection('content')
