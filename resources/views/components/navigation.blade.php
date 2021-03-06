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

.card-content {
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
}

.menu {
  position: relative;
  display: inline-block;
}

.menu-content {
  display: none;
  flex-direction: column;
  text-align: center;
  position: absolute;
  font-size: 1.4rem;
  padding: 0.5rem;
  margin-left: -2.3rem;
}

.menu:hover .menu-content {
  display: flex;
}

</style>

<nav>
    <div class="nav-wrapper">
        <div class="logo-and-menu">
            <a href="/"><img class="logo" src="{{ asset('img/timetoshare.svg') }}" alt="Logo"></a>
            <ul>
                <li><a href="/products">Products</a></li>
                <li><a href="/product/create">Add products</a></li>
            </ul>
        </div>
        <div class="search-wrapper">
            <div class="input-field">
                <input onkeyup="searchFunction()" class="search-box" type="text" id="search" type="search" placeholder="Search for..">
                <i class="label-icon material-icons">search</i>
            </div>
            <div class="menu">
                <a href="/dashboard" class="label-icon material-icons">person</a>
                <div class="menu-content">
                    <a href="/dashboard">Dashboard</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>  
</nav>