<?php
$servername = "localhost";
$username = "ashamsad";
$password = "hivesql";
$dbname = "biomuta";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['user'])) $user=$_POST['user'];
if (isset($_POST['psw'])) $psw=$_POST['psw'];
if (isset($_POST['name'])) $name=$_POST['name'];
if (isset($_POST['phone'])) $phone=$_POST['phone'];
if (isset($_POST['address'])) $address=$_POST['address'];
if (isset($_POST['zip'])) $zip=$_POST['zip'];
$sql="INSERT INTO customers (username,password,customer_name,phone,account_type) VALUES ('".$user."','".$psw."','".$name."','".$phone."',2)";
if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("New record created successfully");</script>';
	header('Location:login.php');
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql_add="INSERT INTO address (customer_address_id,place,zipcode) VALUES ('".mysqli_insert_id($conn)."','".$address."','".$zip."')";
if (mysqli_query($conn, $sql_add)) {
	echo "New address record created successfully";
} else {
	echo "Error: " . $sql_add . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);?>
