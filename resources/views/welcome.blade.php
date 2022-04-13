<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>
        <title>T2S</title>
        <link rel="icon" href="{{ asset('images/TabLogo.svg') }}">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <div class="logo-and-menu">
                    <img class="logo" src="{{ asset('images/Logo.svg') }}" alt="Logo">
                    <ul>
                        <li><a href="/">Home</a></li>
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
                    <a href="#">
                        <img class="user" src="{{ asset('images/User.svg') }}" alt="User">
                    </a>
                </div>
            </div>  
        </nav>
    </body>
</html>
