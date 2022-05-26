@extends('default')
@section('title')   
    Login
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

.login-wrapper {
    width: auto;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-bottom: 0rem;
}

.title {
    text-align: center;
    margin-bottom: 1rem;
}

.title h1 {
    font-size: 5rem;
    font-weight: 500;

    background-color: white;
    background-image: linear-gradient(90deg, #099F2A 0%, #2EF242 100%);
    background-clip: text;
    background-size: 100%;
    background-repeat: repeat;

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-background-clip: text;
    -moz-text-fill-color: transparent;
}

.title h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: white;
}

form {
    display: flex;
    flex-direction: column;
    color: white;
}

form input {
    background: #121212;
    border: 1px solid #3E3E3E;
    box-sizing: border-box;
    border-radius: 5px;
    width: 40rem;
    height: 3.5rem;
}

input[type=text],input[type=password] {
    font-size: 1.3rem;
    color: white;
    margin-left: 5px;
    padding-left: 1rem;
}

.email h1, .password h1 {
    font-weight: 500;
    font-size: 1.7rem;
    padding: 1.5rem 0 1rem 0;
    text-align: left;
}

.button-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;    
    align-items: center;
    padding-top: 3rem;
}

.loginBtn {
    margin-top: 3rem;
    width: 30rem;
    height: 3.1rem;
    border-radius: 5px;
    border: none;
    color: black;
    background-color: white;
    font-size: 1.8rem;
    font-weight: 500;
}

.registerBtn {
    margin-top: 1.2rem;
    width: 30rem;
    height: 3.1rem;
    border-radius: 5px;
    border: 1px solid white;
    color: white;
    background-color: transparent;
    font-size: 1.4rem;
    font-weight: 200;
}

/*
.rememberForget {
   display: flex;
   width: 82vw;
   align-items: center;
   margin-top: 1rem;
   font-size: 1.2rem;   
}

.rememberForget input{
    height: 2rem;
    width: 2rem;
}

.rememberForget label {
    margin-left: 0.5rem;
}

.rememberForget p {
    margin-left: auto;
    text-decoration: none;
    color: white;
}

.rememberForget a {
    color: #0C9600;
}

.resetPswd {
    width: 32rem;
    text-align: right;
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: 400;
}

.rememberForgot {
    width: 100%;
    display: inline-block;
 } */
</style>
<script>
    
</script>
<body>
    <div class="login-wrapper">
        <div class="title">
            <h1 class="text-gradient">TimetoShare</h1>
            <h2>Products of tomorrow</h2>
        </div>
        <form>
            <div class="input">
                <div class="email">
                    <h1>E-Mail</h1>
                    <input type="text" name="email" id="email" placeholder="Vul hier je e-mail in">
                </div>
                <div class="password">
                    <h1>Wachtwoord</h1>
                    <input type="password" name="password" id="password" placeholder="Vul hier je wachtwoord in">
                </div>
            </div>
        </form>

        <div class="button-wrapper">
            <button class="loginBtn">Inloggen</button>
            <button class="registerBtn">Maak een account aan</button>
        </div>
    </div>
</body>
@endsection('content')