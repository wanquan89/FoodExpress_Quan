<?php include "common_header.php";?>
<div class="widget">
	<h2>Login/Sign Up</h2>
	<div class="inner">
		<form action="login.php" method="post">
			<ul id="login">
				<li>
					Username:<br>
					<input type='text' name='username'>
				</li>
				<li>
					Password:<br>
					<input type='password' name='password'>
				</li>
				<li>
					<input type='submit' value='Log in'>
				</li>
				<li>
					<a href='signup.php'>Sign Up</a>
				</li>
			</ul>
		</form>
	</div>
</div>
<?php include "common_footer.php";?>