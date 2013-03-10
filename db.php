<?php
$host = 'localhost'; // Host name Normally 'LocalHost'
$user = 'root'; // MySQL login username
$pass = ''; // MySQL login password
$database = 'offer-track'; // Database name
 
mysql_connect($host, $user, $pass);
mysql_select_db($database);
mysql_query("SET NAMES UTF8");
?>