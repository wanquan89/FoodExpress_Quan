<?php
include 'core/init.php';
if(isset($_GET['page'])) {
	$pages=array("product","cart");
	if(in_array($_GET['page'],$pages)){
		$page=$_GET['page'];
	}else{
		$page="product";
	}
}else{
	$page="product";
}
if (logged_in() === true) {
	$icon="<img src='images/icon_account_white.png'>Logged in";
}else {
	$icon="Login/Sign Up";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Catalogue</title>
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
							<li><a href="search.php">Search</a></li>
                            <li><a class="active" href="shop.php">Menu</a></li>
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
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic">Perfect</div>
        <div class="main">
            <div class="container" style="position:relative;left:-125px;clear:left;">
            	
                	<?php require($page.".php");?>
                
            </div>
			<div id="sidebar" style="position:relative;left:150px;float:right;top:-710px;">
				
				<h1>Cart</h1>
				<br />
				
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
<p><?php echo $row['name'];?> x <?php echo $_SESSION['cart'][$row['id_products']]['quantity'];?></p>
<?php } ?>
<hr />
<a href="shop.php?page=cart">Go to Cart</a>
<?php
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
                Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Quan Wan</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
