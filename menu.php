<?php
include 'core/database/connect.php';
/*if(isset($_GET['page'])) {
	$pages=array("menu","cart");
	if(in_array($_GET['page'],$pages)){
		$page=$_GET['page'];
	}else{
		$page="menu";
	}
}else{
	$page="menu";
}*/
$test=1;
	if (isset($_GET['action']) && $_GET['action']=="add") {
		$id=intval($_GET['id']);
		if(isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]['quantity']++;
		}else {
			$sql2="SELECT * FROM products WHERE id_products={$id}";
			$query2=mysql_query($sql2);
			if(mysql_num_rows($query2)!=0){
				$row2=mysql_fetch_array($query2);
				$_SESSION['cart'][$row2['id_products']] = array("quantity"=>1,"price"=>$row2['price']);
				$test++;
			}else{
				$message="This product id is invalid";
			}
		}
	echo $_SESSION['cart'][$row2['id_products']]["quantity"];
	echo $test;
	}
?>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
		}); 
	</script>
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
<body id="page3">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.php">Food<span>Express</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.php">About</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a class="active" href="menu.php">Catalogue </a></li>
                            <li><a href="shipping.html">Shipping</a></li>
                            <li><a href="faq.html">FAQ </a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Impressive Selection <span>for any Occasion</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - January 23, 2012!</div>
        <div class="main">
            <div class="container">
            	<h3 class="prev-indent-bot">Menu</h3>
                <div id="slider-2">
                	<?php include 'loop_menu.php';?>
                </div>
				<div id="sidebar"><h1>Cart</h1>
				
				<?php
if (isset($_SESSION['cart'])) {
	$sql="SELECT * FROM products WHERE id_products IN (";
	foreach($_SESSION['cart'] as $id => $value) {
		$sql.=$id.",";
	}
	$sql=substr($sql,0,-1).") ORDER BY id_products ASC";
	$query=mysql_query($sql);
while($row=mysql_fetch_array($query)) {
?>
<p><?php echo $row['name'];?><?php echo $_SESSION['cart'][$row['id_products']]['quantity'];?></p>
<a href="menu.php?page=cart">Go to Cart</a>
<?php
	}
	}else {
		echo "<p>Your cart is empty.<br />Please add some products</p>";
	}


?>
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	<span>foodexpress.com &copy; 2012</span>
                Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Quan</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
