<!DOCTYPE html>
<html lang= "{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer');
:root{
    --primary-color: #3C5185;
    --secondary-color: #FF9900;
}
* :not(i){
    font-family: "PT Sans"
}
* li{
    list-style: none;
}
body{
    background-color: #FBFCFD;
    height: 90vh;
    width: 70vw;
    margin: 0 auto;
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
    background: var(--primary-color);
    border-radius:50px;
    border:1px solid var(--primary-color);
}
.buttons-account li:nth-child(2):hover{
    border:1px solid var(--primary-color);
    background: transparent;
    color:white
}
.buttons-account li:nth-child(2):hover .sign-up{
    color:var(--primary-color);
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
    grid-template-columns: 2fr 1fr;
    width:100%;
    height:100%;
}
.hero-pg-intro-txt h1, h4, button{
  margin: 0 10%;
}
.hero-pg-intro-txt h1{
    margin-top: 20%;
    font-size:50px;
    color: black;
    font-weight:900;
}
.hero-pg-intro-txt h4{
    margin-top: 5%;
    font-size:15px;
    font-weight:300;
}
.hero-pg-intro-txt .learn-more, .buy-plan{
    margin-top: 5%;
    background: var(--primary-color);
    border-radius:50px;
    border:1px solid var(--primary-color);
    color:white;
    cursor: pointer;
    height:45px;
width: 140px;
font-size:14px
}
.hero-pg-intro-txt .learn-more:hover , .buy-plan:hover{
    border:1px solid var(--primary-color);
    background: transparent;
    color: var(--primary-color);
}
.hero-pg-intro-img img{
margin:20% 10% 20% 0%;
height:55%;

}
.services{
    width:100%;
    height:200px;

}
.services-title, .pricing-plan-title{
    display:flex;
    flex-direction:column;
    align-items:center;
    margin-top:150px;
}
.head-text2{
    position:relative;
}
.head-text2::after{
    content:"";
    width:100px;
   background: var(--primary-color);
   height:3px;
   position:absolute;
   top: 50px;
   left:40%;
}
.head-text3{
    margin-top:20px;
width:30%;
text-align:center;
font-weight:300;
}
.services-body-grid{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
    align-items:center;
    margin-top:80px
}
.service-1, .service-2, .service-3{
display: flex;
flex-direction:column;
height: 200px;
width:250px;
border-radius:20px;
justify-content:center;
padding: 10px 40px;

}
.service-1 .service-2 .service-3 span{
display: inline-flex;
}
.sv-img{
height: 40px;
width:40px
}
.sv-txt{
font-size:12px;
}

/* ................................................................................................................................................... */
/* ABOUT US */
/* ................................................................................................................................................... */
.hero-pg-about{
    display: grid;
    grid-template-columns: 1fr 1fr;
    width:100%;
    height:100%;
    margin-top:300px
}
.hero-pg-about-img img{
    margin:20% 0% 0% 25%;
height:45%;
}
.head-text4{
    position:relative;
    font-size:18px
}
.head-text4::after{
    content:"";
    width:80px;
   background: var(--primary-color);
   height:3px;
   position:absolute;
   top: 70px;
   left:12%;
}

/* ................................................................................................................................................... */
/* CARDS - BUSINESS PLANS */
/* ................................................................................................................................................... */
.pricing-plan{
    width:100%;
}

.pricing-plan-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    align-items:center;
    margin-top:80px
}
.card-1{
    display: flex;
    flex-direction:column;
    align-items:center;
    border:1px solid grey;
    height:auto;
    width:280px;
    border-radius:10px;
}
.card-1 ul{
    display: flex;
    flex-direction:column;
}
.prie-area{
  width: 100%;
  display: flex;
    flex-direction:column;
    align-items:center;
}
.buy-plan{
    height:40px;
width: 80%;
font-size:12px

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
         <h1 class="head-text"> Professional </br> marketing solutions for<br> <span style='color:var(--primary-color)'>your business</span> </h1>
         <h4 class="head-sub-text"> We help businesses with software solutions & tools that offer wide range of benefits & performance insights ideal for forward-thinking & market lead. </h4>
         <button class='learn-more'>Learn More</button>
        </div>
        <div class="hero-pg-intro-img">
        <img src='./img/biz2.png' alt='img' />
        </div>
    </div>
</div>
    <div class="services">
        <div class="services-title">
        <h4 class="head-text1">Our Services </h4>
        <h1 class="head-text2">We are digital marketing pro </h1>
        <h5 class="head-text3">Lorem ipsum dolor ctetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud   </h5>
        </div>
        <div class="services-body-grid">
          <div class="service-1">
            <span><img class='sv-img' src='./img/content.svg' alt='img' /><h3>Schedule Content</h3></span>
            <p class='sv-txt'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
          </div>
          <div class="service-2">
            <span><img  class='sv-img'  src='./img/safe.svg'  alt='img' /><h3>Secure Advertising</h3></span>
            <p class='sv-txt'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
          </div>
          <div class="service-3">
            <span><img class='sv-img'  src='./img/seo.svg'  alt='img' /><h3>SEO Ranking</h3></span>
            <p class='sv-txt'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
          </div>
        </div>
    </div>
    <div class="hero-pg-about">
    <div class="hero-pg-about-img">
        <img src='./img/21430.svg' alt='img' />
        </div>
        <div class="hero-pg-intro-txt">
        <h4 class="head-text1">About us</h4>
        <h1 class="head-text4">We hold your hand every part of the way. How awesome? </h1>
         <h4 class="head-sub-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </h4>
        </div>
    </div>

    <div class="pricing-plan">
        <div class="pricing-plan-title">
        <h1 class="head-text2">Our Pricing Plan </h1>
        <h5 class="head-text3">Lorem ipsum dolor ctetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud   </h5>
        </div>
        <div class="pricing-plan-grid">
          <div class="card-1">
         <h3 class='plan-title'>Starter</h3>
        <ul>
            <li><span><i class="fa fa check-circle"></i> 1 Domain</span></li>
            <li><span><i class="fa fa check-circle"></i> 100 product upload</span></li>
            <li><span><i class="fa fa check-circle"></i> 1GB Storage Free</span></li>
            <li><span><i class="fa fa check-circle"></i> 5MB/s server speed</span></li>
            <li><span><i class="fa fa check-circle"></i> Tutorial pack</span></li>
            <div class="prie-area"><p>Ksh. 48,999/-</p>  <p>Per year</p>
            <button class='buy-plan' >Buy</button></div>
          
        </ul>
          </div>
   
          <div class="card-1">
         <h3 class='plan-title'>Starter</h3>
        <ul>
            <li><span><i class="fa fa check-circle"></i> 1 Domain</span></li>
            <li><span><i class="fa fa check-circle"></i> 100 product upload</span></li>
            <li><span><i class="fa fa check-circle"></i> 1GB Storage Free</span></li>
            <li><span><i class="fa fa check-circle"></i> 5MB/s server speed</span></li>
            <li><span><i class="fa fa check-circle"></i> Tutorial pack</span></li>
            <div class="prie-area"><p>Ksh. 48,999/-</p></div>
            <p>Per year</p>
            <button class='buy-plan' >Buy</button>
        </ul>
          </div>
          <div class="card-1">
         <h3 class='plan-title'>Starter</h3>
        <ul>
            <li><span><i class="fa fa check-circle"></i> 1 Domain</span></li>
            <li><span><i class="fa fa check-circle"></i> 100 product upload</span></li>
            <li><span><i class="fa fa check-circle"></i> 1GB Storage Free</span></li>
            <li><span><i class="fa fa check-circle"></i> 5MB/s server speed</span></li>
            <li><span><i class="fa fa check-circle"></i> Tutorial pack</span></li>
            <div class="prie-area"><p>Ksh. 48,999/-</p></div>
            <p>Per year</p>
            <button class='buy-plan' >Buy</button>
        </ul>
          </div>
          <div class="card-1">
         <h3 class='plan-title'>Starter</h3>
        <ul>
            <li><span><i class="fa fa check-circle"></i> 1 Domain</span></li>
            <li><span><i class="fa fa check-circle"></i> 100 product upload</span></li>
            <li><span><i class="fa fa check-circle"></i> 1GB Storage Free</span></li>
            <li><span><i class="fa fa check-circle"></i> 5MB/s server speed</span></li>
            <li><span><i class="fa fa check-circle"></i> Tutorial pack</span></li>
            <div class="prie-area"><p>Ksh. 48,999/-</p></div>
            <p>Per year</p>
            <button class='buy-plan' >Buy</button>
        </ul>
          </div>

        </div>
    </div>

</body>
</html>