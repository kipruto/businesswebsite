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
    background-color: #C7F0FE;

}
.left-side-nav{
    float:left;
    display:flex;
    align-items:center;
    justify-content:center;
    width:60%;
    background-color: #FBFCFD;

}
.right-side-nav{
    float:right;
    display:flex;
    align-items:center;
    justify-content:center;
    width:40%;
    background-color: #FBFCFD;

}
ul{
    display: inline-flex;
}
li{
    list-style: none;
    margin: 5px 10px;
    /* border: 1px solid black; */
    padding: 5px 20px
}
        </style>
</head>

<body>
<nav>
    <div class='left-side-nav'>
    <ul>
        <li> <a>Home</a></li>
        <li> <a>Services</a></li>
        <li> <a>Blog</a></li>
        <li> <a>Contact us</a></li>
        <li> <a>Support</a></li>
</ul>
    </div>
    <div class='right-side-nav'>
    <ul>
        <li> <a class='login-btn'>Login</a></li>
        <li> <a class='sign-up'>Sign Up</a></li>
</ul>
</div>
</nav>
    
</body>
</html>