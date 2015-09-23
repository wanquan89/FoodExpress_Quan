
<?php
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
			}else{
				$message="This product id is invalid";
			}
		}
	}
$sql="SELECT * FROM products ORDER BY price ASC";
$query=mysql_query($sql) or die (mysql_error());
$n=1;
$m='<h3 class="prev-indent-bot">Menu</h3><div id="slider-2">';
while($row=mysql_fetch_assoc($query)){
	$ref="shop.php?page=product&action=add&id=".$row['id_products'];
	if ($n%2==1) {
		$m.='<div><div class="p4"><figure><a class="lightbox-image" href="images/'.$row['id_products'].'.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/'.$row['id_products'].'.jpg" alt=""></a></figure>';
		$m.='<h5>'.$row['name'].'</h5><p class="p1">'.$row['description'].'</p><p class="p2"><strong class="color-2">Price: $'.$row['price'].'</strong></p><a class="button-1" href="'.$ref.'">Add to Cart</a></div>';
	}else {
		$m.='<figure><a class="lightbox-image" href="images/'.$row['id_products'].'.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/'.$row['id_products'].'.jpg" alt=""></a></figure>'.'<h5>'.$row['name'].'</h5><p class="p1">'.$row['description'].'</p><p class="p2"><strong class="color-2">Price: $'.$row['price'].'</strong></p><a class="button-1" href="'.$ref.'">Add to Cart</a></div>';
	}
	$n++;
}
$m.='</div>';
echo $m;
?>