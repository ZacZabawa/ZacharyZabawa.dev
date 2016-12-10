<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<link rel="icon" href="img/favicon.png">
<title>Zachary Zabawa</title>
<!-- BOOTSTRAP CORE CSS -->

<link href="css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<!-- animate.css -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<link href="js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="css/style-green.css" rel="stylesheet" />
<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body data-spy="scroll" data-target="#menu-section">
<!--MENU SECTION START-->
{{-- <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-left">
<img class ="brand" align src="img/favicon.png" width="60px" display= "-webkit-inline-box" margin-right="5px"></a>
<a class="navbar-brand" href="#" >

  ZACHARY ZABAWA
</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="#home">HOME</a></li>
<li><a href="#services">WORK</a></li>
<li><a href="{{ url('/play') }}">PLAY</a></li>
<li><a href="{{ url('/make') }}">MAKE</a></li>
<li><a href="{{ url('https://bus-trouble.tumblr.com/') }}">TROUBLE THE BUS</a></li>
<li><a href="#contact">CONTACT</a></li>
</ul>
</div>

</div>
</div> --}}
<!--MENU SECTION END-->
<!--HOME SECTION START-->

<div class="overlayBack background">
      
<div id="home" >
       
        <div class="workBtn ">
            <a href="#services" class="landBtn landBtnLeft animated"><h2>Work </h2></a>
            <span class="slideWorkLeft slideWork  animated"> <h1>Shall We?</h1></span>
            </div>
            <div class="playBtn ">
            <a href="#services" class="landBtn landBtnRight animated"><h2>Play </h2></a>
             <span class="slideWork slideWorkRight animated"> <h1>Do It</h1></span>
            </div>

            <div id="workDiv">
           
            </div>
        <div class="container">
            <div class="row-fluid">
                
                     <div class="col-sm-8 col-md-12 col-lg-12 " id-"slider-body">
                       
                        <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
                         
                            <div class="carousel-inner">
                                                        <div class="item active">
                                                                
                                                                
                                                               <div class= "img-fluid">
                                                                        
                                                                        <img class="introPic" src="img/IntroPic.png">
                                                                </div>                                                                      
                                                               
                                                                                                                       </div>



                                                        <div class="item">

                                                                <p>
                                                                    <span class="boldPunct">&ldquo; </span>I would like to think of myself as a      <br><span class="bold">pragmatic idealist</span> <br>with some <br><span class="smBold">perpetual learning </span><br>tendencies . . .<span class="boldPunct"> "</span></span> 
                                                                     <br><BR><br>
                                                                </p>

                                                        </div>
       

                                                        <div class="item">

                                                                <p>
                                                                    <span id="quot" class="boldPunct">&ldquo; </span><span class="Bold"> I revel</span> in discovering how complex systems work. While I enjoy the simplicity of solving concrete problems through creativity and engineering, my true passion is grappling with the intangible nature of human systems that lie at the vertices <br><span class="smBold">  economics, culture, and law . . .</span> <span class="boldPunct">"</span>
                                                                <br>
                                                                </p>

                                                        </div>
                                                
                                                        <div class="item">
                                                            <div class="centerLogo img-fluid">
                                                                <img src="img/logotransMed.png" >
                                                            </div>
                                                        </div>

                                                </div>

        <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    <li data-target="#bs-carousel" data-slide-to="3"></li>
        </ol>

                        </div>
                </div>
</div>

<svg class="arrows">
                            <path class="a1" d="M0 0 L30 32 L60 0"></path>
                            <path class="a2" d="M0 20 L30 52 L60 20"></path>
                            <path class="a3" d="M0 40 L30 72 L60 40"></path>
                        </svg>

</div>
</div>
{{-- HOME SECTION END --}}

{{-- Card section --}}
<div id="card" >
        <div class="container">

        
            
<div class="row animate-in row-centered" data-anim-type="fade-in-up">
    <div class ="face col-sm-3  col-md-3 col-lg-4  col-centered scroll-me ">
        <div id="effect-1" class="effects clearfix">
            <div class="img img-responsive">
                <img src="img/Cover300.png" alt="">
                <div class="overlayImg">
                     <a href="#" class="expand">Let's Go</a>
                    <a class="close-overlay hidden"></a>
                 </div>
            </div>
        </div>
    </div>
    <div id="title" class="col-sm-6  col-md-8 col-lg-8 scroll-me">
        <div class="titleCard"

        <p >
      
                <h1> Researcher / Facilitator / Creator </h1>

                <h3>Finding unique solutions is my speciality</h3>

        </p>

<div class="social">
<a href="https://www.facebook.com/zac.zabawa" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
<a href="https://www.instagram.com/z.zabawa175" class="btn button-custom btn-custom-one" ><i class="fa fa-instagram"></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
<a href="https://github.com/ZacZabawa" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
</div>
</div>

</div>
{{-- <div class="text-center"><a href="#services" class=" landBtn btn button-custom btn-custom-two">See Skills </a></div> --}}
</div>
</div>
</div>
<!--SERVICE SECTION START-->
<section id="services" >
<div class="container">
<div class="row text-center header">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
<h2>My Skills</h2>
<hr />
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-document"></i>
<h3>Writing</h3>
Experince writing academic, non-profit, and industry reports and grants, as well as media and public outreach material covering all levels of formality from the State Capital to the community park. 
<hr> 7 years experience   
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-scissors"></i>
<h3>GIS/WEB-MAPPING</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-clipboard"></i>
<h3>Event and Expedition Planning</h3>
I have accumulated a proven record of planning and executing large scale events and trips. These include guiding 2 successful month-long mountaineering expeditions to the Peruvian Andes and Denali National Park, planning an international conference for Indigenous research methodology for UBC, and organizing weekend trips for the pals.
<hr>
~ Lifetime  
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-calendar"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-erlenmeyer-flask"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-monitor"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-pinpoint"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-tshirt-outline"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-speedometer"></i>
<h3>Consectetur tellus nec</h3>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat, consectetur tellus nec, porttitor nulla.
</div>
</div>
</div>
</div>
</section>
<!--SERVICE SECTION END-->
{{-- <!--PRICING SECTION START-->
<section id="pricing" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Pricing Options</h3>
<hr />
</div>
</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<div class="row db-padding-btm db-attached">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>$</sup>99
<small>per day</small>
</div>
<div class="type">
BASIC
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing popular">
<div class="price">
<sup>$</sup>199
<small>per month</small>
</div>
<div class="type">
MEDIUM
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>$</sup>249
<small>per yer</small>
</div>
<div class="type">
ADVANCE
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="light-pricing">
<div class="price">
<sup>$</sup>599
<small>one time</small>
</div>
<div class="type">
EXTENDED
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<div class="row db-padding-btm db-attached">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="light-pricing ">
<div class="price">
<sup>$</sup>99
<small>per day</small>
</div>
<div class="type">
SMALL
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="light-pricing popular">
<div class="price">
<sup>$</sup>159
<small>per month</small>
</div>
<div class="type">
MEDIUM
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="light-pricing">
<div class="price">
<sup>$</sup>799
<small>per month</small>
</div>
<div class="type">
ADVANCE
</div>
<ul>

<li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
<li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
<li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
</ul>
<div class="pricing-footer">

<a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!--PRIICING SECTION END--> --}}
<!--WORK SECTION START-->
<section id="work" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Our Works</h3>
<hr />
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-bottom">
<div class="caegories">
<a href="#" data-filter="*" class="active btn btn-custom btn-custom-two btn-sm">All</a>
<a href="#" data-filter=".html" class="btn btn-custom btn-custom-two btn-sm">HTML</a>
<a href="#" data-filter=".css" class="btn btn-custom btn-custom-two btn-sm">CSS</a>
<a href="#" data-filter=".code" class="btn btn-custom btn-custom-two btn-sm" >CODE</a>
<a href="#" data-filter=".script" class="btn btn-custom btn-custom-two btn-sm" >SCRIPT</a>
</div>
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/1.jpg">

<img src="img/portfolio/1.jpg" class="img-responsive img-rounded" alt="" />
</a>
<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html css">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/2.jpg">

<img src="img/portfolio/2.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 code script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/3.jpg">

<img src="img/portfolio/3.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/4.jpg">

<img src="img/portfolio/4.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html code">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/5.jpg">

<img src="img/portfolio/5.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 script">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="img/portfolio/6.jpg">

<img src="img/portfolio/6.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Morbi mollis lectus et ipsum</h4>
</div>
</div>
</div>
</div>
</section>
<!--WORK SECTION END-->
<!--TEAM SECTION START-->
<section id="team" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Team Members </h3>
<hr />
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('img/team/1.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Leomarid Jona</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('img/team/2.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Leomarid Jona</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('img/team/3.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Leomarid Jona</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('img/team/4.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> Leomarid Jona</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>
Pellentesque elementum dapibus convallis.
Vivamus eget finibus massa.
</p>
</div>
</div>

</div>
</div>
</section>
<!--TEAM SECTION END-->
<!--GRID SECTION START-->
{{-- <section id="grid" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3>Grid Overview </h3>
<hr />

</div>
</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<h2>1/4 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<h2>1/4 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<h2>1/4 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<h2>1/4 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<h2>1/3 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<h2>1/3 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<h2>1/3 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>

</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<h2>1/2 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<h2>1/2 Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>


</div>
<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h2>Full Section</h2>
<p>
Morbi mollis lectus et ipsum sollicitudin varius.
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>

</div>



</div>
</div>
</section> --}}
<!--GRID SECTION END-->
</div>
<!--CONTACT SECTION START-->
<section id="contact" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3>Contact Details </h3>
<hr />

</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Reach </h3>
<p>
Aliquam tempus ante placerat,
consectetur tellus nec, porttitor nulla.
</p>
<div class="social-below">
<a href="#" class="btn button-custom btn-custom-two" > Facebook</a>
<a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
<a href="#" class="btn button-custom btn-custom-two" > Google +</a>
</div>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Quick Contact</h3>
<h4><strong>Email : </strong> z.zabawa175.com </h4>
<h4><strong>Call : </strong> 778-251-2672 </h4>
<h4><strong>Skype : </strong> Yujhaeu78 </h4>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Address : </h3>
<h4>230/45 , New way Lane , </h4>
<h4>United States</h4>
<div class="footer-div" >
&copy; 2015 YourDomain | <a href="http://www.designbootstrap.com/" target="_blank" >by DesignBootstrp</a>
</div>
</div>

</div>

</div>


</div>

</section>
</div>
<!--CONTACT SECTION END-->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<!-- modernizing SCRIPTS PLUGIN -->
<script src="js/modernizr.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="js/appear.min.js"></script>
<script src="js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="js/custom.js"></script>
</body>

</html>
