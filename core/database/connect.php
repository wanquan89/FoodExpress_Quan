<?php
$connect_error='Sorry, we\'re experiencing connection problems.';
mysql_connect("localhost", "ashamsad","hivesql") or die($connect_error);
mysql_select_db("biomuta") or die($connect_error);


?>