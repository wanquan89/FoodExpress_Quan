<?php
include 'core/init.php';
if (logged_in() === true) {
	$icon="<img src='images/icon_account_white.png'>Logged in";
}else {
	$icon="Login/Sign Up";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Express</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.php">Food<span>Express</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="index.php">About</a></li>
							<li><a href="search.php">Search</a></li>
                            <li><a href="shop.php">Menu</a></li>
                            <li><a href="shop.php?page=cart">Cart</a></li>
                            <li><a href="login.php"><?php echo $icon;?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Impressive Selection <span>for any Occasion</span></h2>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - January 23, 2012!</div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-1">
                	<a href="#"><img class="img-border" src="images/banner-1.jpg" alt=""></a>
                </article>
                <article class="col-1">
                	<a href="#"><img class="img-border" src="images/banner-2.jpg" alt=""></a>
                </article>
                <article class="col-2">
                	<a href="#"><img class="img-border" src="images/banner-3.jpg" alt=""></a>
                </article>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            <h3>Our Services</h3>
                            <ul class="list-1">
                                <li><a href="#">Duis autem vel eum iriure dolor</a></li>
                                <li><a href="#">Hendrerit in vulputate velit esse molestie </a></li>
                                <li><a href="#">Consequat vel illum dolore</a></li>
                                <li><a href="#">Feugiat nulla facilisis at vero eros</a></li>
                                <li><a href="#">Accumsan et iusto odio dignissim qui</a></li>
                                <li><a href="#">Blandit praesent luptatum azril</a></li>
                                <li><a href="#">Delenit augue duis dolore te feugait</a></li>
                            </ul>
                        </div>
                        <a class="button-1" href="#">Read More</a>
                    </div>
                </article>
                <article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">About the Food Express</h3>
                        <h6 class="p2">Food Express is now proud to make his signature Szechuan cuisine available to Arlington.</h6>
                        <p class="p2">Nestled in the Lee Harrison Shopping Centre, the seventh and newest location in the Peter Chang family is a return to the northern Virginia area for the chef. </p>
                        This website template has several pages: <a href="index.html">About</a>, <a href="menu.html">Menu</a>, <a href="catalogue.html">Catalogue</a>, <a href="shipping.html">Shipping</a>, <a href="faq.html">FAQ</a>, <a href="contact.html">Contact</a> 
                    </div>
                    <a class="button-2" href="#">Read More</a>
                </article>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	<span>foodexpress.com &copy; 2012</span>
                Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Quan Wan</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
