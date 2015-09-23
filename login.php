<?php
include 'core/init.php';
if (logged_in() === true) {
	include 'includes/widgets/loggedin.php';
}else {
	include 'includes/widgets/login.php';
}

if(empty($_POST)===false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username)===true || empty($password)===true) {
		$errors[]='You need to enter an username and password';
	}else if (user_exists($username)===false) {
		$errors[]='We cannot find the username';
	}else {
		$login=login($username,$password);
		if ($login===false) {
			$errors[]='That username or password is incorrect';
		}else{
			$_SESSION['user_id']=$login;
			header('Location:index.php');
			exit();
		}
	}
if (empty($errors)===false){
?>
<h2>We tried to log you in, but...</h2>
<?php
 echo output_errors($errors);
}
}
?>