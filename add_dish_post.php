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
if (isset($_POST['price'])) $price=$_POST['price'];
if (isset($_POST['name'])) $name=$_POST['name'];
if (isset($_POST['description'])) $description=$_POST['description'];
$sql="INSERT INTO products (name,description,price) VALUES ('".$name."','".$description."','".$price."')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);?>
<br>
<br>
Add another dish:
<button type='button' id='goback'>Go</button>
<script type='text/javascript'>
	document.getElementById('goback').onclick=function() {
		location.href="https://hive.biochemistry.gwu.edu/usr/wanquan89/tools/food_express/add_dish.php";
	};
</script>