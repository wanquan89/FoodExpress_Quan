<?php include "common_header.php";?>
<h2>Welcome,<?php echo $user_data['username'];?></h2>
<br>
<h3>User Information</h3>
<ul>
<li>Name:<?php echo $user_data['customer_name'];?></li>
<li>Phone:<?php echo $user_data['phone'];?></li>
<li>Address:<?php echo $user_address['place'].", ".$user_address['zipcode'];?></li>
</ul>
<?php
if ($user_data['account_type']==1) {
	echo "<a href='add_dish.php'><button>Add more dishes</button></a>";
}
?>
<form align="right" name="form1" method="post" action="logout.php">
  <input name="submit2" type="submit" id="submit2" value="log out">
</form>
<?php include "common_footer.php";?>