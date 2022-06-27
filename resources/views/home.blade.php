<!DOCTYPE html>
<html lang= "{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>

body{
    background-color: #FBFCFD;
    height: 90vh;
    width: 70vw;
    margin: 0 auto;
}
.sign-up{
    
}
nav{
    display:flex;
    align-items:center;
    height:100px;
    width:100%;
}
.left-side-nav{
    float:left;
    display:flex;
    align-items:center;
    justify-content:center;
    width:60%;
}
.right-side-nav{
    float:right;
    display:flex;
    align-items:center;
    justify-content: flex-end;
    width:40%;
}
ul{
    display: inline-flex;
}
li{
    list-style: none;
    margin: 15px 10px;
    padding: 5px 20px
}
.buttons-account li:nth-child(2){
    background: #0C122A;
    border-radius:50px;
    border:1px solid #0C122A;
}
.buttons-account li:nth-child(2):hover{
    border:1px solid #0C122A;
    background: transparent;
    color:white
}
.buttons-account li:nth-child(2):hover .sign-up{
    color:#0C122A;
}
.buttons-account li {
display: flex;
height:30px;
width: 70px;
align-items:center;
justify-content:center;
cursor: pointer;
}
.sign-up{
    color:white;
}
.logo-img{
    height: 40px;
    width:auto;
    justify-content: flex-start;

}
.hero-pg{
background: #F3F3F4;
height: 70vh;
width:100%;
}

.hero-pg-grid{
    display: grid;
    grid-template-columns: 1fr 1fr;
    width:100%;
    height:100%;
}
.hero-pg-intro-txt h1, h4, button{
  margin: 0 10%;
}
.hero-pg-intro-txt h1{
    margin-top: 20%;
    font-size:40px
}
.hero-pg-intro-txt h4{
    margin-top: 5%;
}
.hero-pg-intro-txt .learn-more{
    margin-top: 5%;
    background: #0C122A;
    border-radius:50px;
    border:1px solid #0C122A;
    color:white;
    cursor: pointer;
    height:45px;
width: 140px;
font-size:14px
}
.hero-pg-intro-txt .learn-more:hover{
    border:1px solid #0C122A;
    background: transparent;
    color: #0C122A;
}
        </style>
</head>

<body>
<nav>
<div><img class='logo-img' src='./img/bollinger.svg' alt='logo' /></div> 
    <div class='left-side-nav'>
    <ul>
        <li> <a>Home</a></li>
        <li> <a>Pricing</a></li>
        <li> <a>Features</a></li>
        <li> <a>Contact</a></li>
</ul>
    </div>
    <div class='right-side-nav'>
    <ul class='buttons-account'>
        <li> <a class='login-btn'>Login</a></li>
        <li> <a class='sign-up'>Sign Up</a></li>
</ul>
</div>
</nav>

<div class="hero-pg">
    <div class="hero-pg-grid">
        <div class="hero-pg-intro-txt">
         <h1 class="head-text"> Professional marketing solutions for <br> businesses </h1>
         <h4 class="head-sub-text"> We help businesses with software solutions & tools that offer wide range of benefits & performance insights ideal for forward-thinking & market lead </h4>
         <button class='learn-more'>Learn More</button>
        </div>
        <div class="hero-pg-intro-img">

        </div>
    </div>

</div>
    
</body>
</html>