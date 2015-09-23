<?php
include 'core/init.php';
include 'includes/widgets/common_header.php';
?>
What do you want to eat? Beef or Fish? Have a search!
<form name="searchdish" method="GET" action=search.php>
<input type="text" name="dishname">
<br />
<input  name="reset-button" type="reset" width="100" height="100" left="25" >

<input  id="submission" name="c" value="Submit" type="submit" width="200px" height="100px">
</form>
<?php
$m='<div>';
if(isset($_GET['dishname'])) {
	$sql="SELECT * FROM products WHERE name LIKE '%".$_GET['dishname']."%' ORDER BY price ASC";
	$query=mysql_query($sql) or die (mysql_error());
	while($row=mysql_fetch_assoc($query)){
	$m.='<figure><a class="lightbox-image" href="images/'.$row['id_products'].'.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/'.$row['id_products'].'.jpg" alt=""></a></figure>'.'<h5>'.$row['name'].'</h5><p class="p1">'.$row['description'].'</p><p class="p2"><strong class="color-2">Price: $'.$row['price'].'</strong></p>';
}	
}
$m.="</div>";
echo $m;
?>
<?php
include 'includes/widgets/common_footer.php';
?>