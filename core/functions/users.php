<?php
function user_data($user_id) {
	$data=array();
	$user_id=(int)$user_id;
	$func_num_args=func_num_args();
	$func_get_args=func_get_args();
	if($func_num_args>1) {
		unset($func_get_args[0]);
		$fields='`'.implode('`,`',$func_get_args).'`';
		$data=mysql_fetch_assoc(mysql_query("SELECT $fields FROM `customers` WHERE `customer_id`=$user_id"));
		return $data;
	}
}
function user_address($user_id) {
	$data=array();
	$user_id=(int)$user_id;
	$func_num_args=func_num_args();
	$func_get_args=func_get_args();
	if($func_num_args>1) {
		unset($func_get_args[0]);
		$fields='`'.implode('`,`',$func_get_args).'`';
		$data=mysql_fetch_assoc(mysql_query("SELECT $fields FROM `address` WHERE `customer_address_id`=$user_id"));
		return $data;
	}
}
function logged_in() {
	return(isset($_SESSION['user_id'])) ? true:false;
}
function user_exists($username) {
	$query=mysql_query("SELECT COUNT(`customer_id`) FROM `customers` WHERE `username`='$username'");
	return (mysql_result($query,0)==1)?true:false;
}
function user_id_from_username($username) {
	return mysql_result(mysql_query("SELECT `customer_id` FROM `customers` WHERE `username`='$username'"),0,'customer_id');
}
function login($username,$password) {
	$user_id=user_id_from_username($username);
	return (mysql_result(mysql_query("SELECT COUNT(`customer_id`) FROM `customers` WHERE `username`='$username' AND `password`='$password'"),0)==1) ? $user_id:false;
}

?>