<?php
$connect_error='Sorry, we\'re experiencing connection problems.';
mysql_connect("localhost", "username","password") or die($connect_error);
mysql_select_db("database") or die($connect_error);


?>
