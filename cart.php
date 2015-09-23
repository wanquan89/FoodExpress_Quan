<?php 
session_start();
if(isset($_POST['submit']) && isset($_POST['quantity'])) {
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0) {
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
}
?>
<h1>View Cart</h1>
<br />
<a href='shop.php?page=products'>Go back to menu page</a>
<br />

<form method="post" action="shop.php?page=cart">
<table cellpadding="20px">
	<tr>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Items Price</th>
	</tr>
	<?php
		$sql="SELECT * FROM products WHERE id_products IN (";
			foreach($_SESSION['cart'] as $id => $value) {
				$sql.=$id.",";
			}
			$sql=substr($sql,0,-1).") ORDER BY id_products ASC";
			$query=mysql_query($sql);
			$totalprice=0;
			while($row=mysql_fetch_array($query)) {
			$subtotal=$_SESSION['cart'][$row['id_products']]['quantity']*$row['price'];
			$totalprice+=$subtotal;
			?>
				<tr>
					<td><?php echo $row['name']?></td>
					<td><input type='text' name='quantity[<?php echo $row['id_products']?>' size="5" value="<?php echo $_SESSION['cart'][$row['id_products']]['quantity']?>"></td>
					<td>$<?php echo $row['price']?></td>
					<td>$<?php echo $_SESSION['cart'][$row['id_products']]['quantity']*$row['price']?></td>
				</tr>
			<?php
			
			}
			
		?>
				<tr>
					<td>Total Price: $<?php echo $totalprice;?></td>
				</tr>
	
</table>
<br />
<button type='submit' name='submit'>Update Cart</button>
</form>
<br />
<p>To remove an item set its quantity to 0.</p>
	
	
	
	
	
	
	
	
	
	
