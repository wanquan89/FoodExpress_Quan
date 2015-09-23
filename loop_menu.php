<?php
include 'core/init.php';
$sql="SELECT * FROM products ORDER BY price ASC";
$query=mysql_query($sql) or die (mysql_error());
$n=1;
$m='';
while($row=mysql_fetch_assoc($query)){
	$ref="menu.php?page=menu&action=add&id=".$row['id_products'];
	if ($n%2==1) {
		$m.='<div><div class="p4"><figure><a class="lightbox-image" href="images/'.$row['id_products'].'.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/'.$row['id_products'].'.jpg" alt=""></a></figure>';
		$m.='<h5>'.$row['name'].'</h5><p class="p1">'.$row['description'].'</p><p class="p2"><strong class="color-2">Price: $'.$row['price'].'</strong></p><a class="button-1" href="'.$ref.'">Add to Cart</a></div>';
	}else {
		$m.='<figure><a class="lightbox-image" href="images/'.$row['id_products'].'.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/'.$row['id_products'].'.jpg" alt=""></a></figure>'.'<h5>'.$row['name'].'</h5><p class="p1">'.$row['description'].'</p><p class="p2"><strong class="color-2">Price: $'.$row['price'].'</strong></p><a class="button-1" href="'.$ref.'">Add to Cart</a></div>';
	}
	$n++;
}
echo $m;

?>