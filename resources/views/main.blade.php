<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
    body {
    background-color:  black;
    font-family:sans-serif;
    }
    .main-nav {
  grid-area: mn;
  padding: 0 30px 0 20px;
  top: 20;
  left: 5em;
position: fixed;
width: 100%;
z-index: 1;
}

.main-nav a {
  color: white;
  text-decoration: none;
  margin: 5px;  
  
}
.logohotel {
  grid-area: nt;
  object-fit: cover;
  width: 100px;
  max-height: 100%;
  
  padding-left: 30px;
  padding-top: 0px;  
  top: 20;
position: fixed;
width: 100%;
z-index: 1;
}

.logohotel img {  
  height: 35px;     
}
#logo {
  color: red;  
  margin: 0; 
  padding: 0; 
  text-decoration: none;
}

.main-nav a:hover {
  color:  red;
}
.sub-nav {
  grid-area: sb;
  color: black;
  padding: 0 40px 0 40px;
  top:10;
  margin-left: 20rem;
  position: fixed;
width: 100%;
z-index: 1;
}

.sub-nav a {
  color: black;
  text-decoration: none;
  margin: 5px;
}
.sub-nav h3 {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}


.sub-nav a:hover {
  color: red;
}
/* Style the search box inside the navigation bar */
button {
  background-color: red;
  border: none;
  color: white;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  padding: 8px 20px;
}

.btn1{
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0097ff 100%); 
  border-radius: 3px;
  margin-top: 10px;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
}
  

input{
    padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}


</style>
<header>
<div class="logohotel">
        <a id="logo" href="/" style="font-weight: bold;">HTLZZ</a>
      </div>      
<nav class="main-nav">       
                 
       
      


<a href="/list">Home</a>

<a href="/add">Add</a>

<a href="/register">Register</a>
                
</nav>
<nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
 
        <form class="form-inline">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn1" type="submit">Search</button>
</nav>


            <!-- Hamburger -->
                 
    </header>

<body>
   
    <div>@yield('container')</div>
</body>
</html>