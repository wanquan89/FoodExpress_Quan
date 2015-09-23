<?php
session_start();
error_reporting(0);
require 'database/connect.php';
require 'functions/users.php';
require 'functions/general.php';
if (logged_in()===true){
$session_user_id = $_SESSION['user_id'];
$user_data=user_data($session_user_id,'customer_id','username','customer_name','password','phone','account_type');
$user_address=user_address($session_user_id,'place','zipcode');
}


$errors=array();




?>