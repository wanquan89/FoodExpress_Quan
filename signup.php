<?php 
include 'core/init.php';
include 'includes/widgets/common_header.php';?>
    
	<!--==============================content================================-->
<h3>sign up</h3>
<br />
<form name='sign' method='POST' action=signup_post.php>
User name:<input type='text' name='user'>
<br />
Password:<input type='password' name='psw'>
<br>
Confirm password:<input type='password' name='password'>
<br>
Full name:<input type='text' name='name'>
<br>
Phone:<input type='text' name='phone'>
<br>
Address:<input type='text' name='address'>
<br>
Zip code:<input type='text' name='zip'>
<br>
<input type='submit' value='Submit'>
</form>
    
	<!--==============================footer=================================-->
<?php include 'includes/widgets/common_footer.php';?>
