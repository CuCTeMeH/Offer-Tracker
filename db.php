<?php
$host = 'localhost'; // Host name Normally 'LocalHost'
$user = ''; // MySQL login username
$pass = ''; // MySQL login password
$database = 'db'; // Database name
 
mysql_connect($host, $user, $pass);
mysql_select_db($database);
mysql_query("SET NAMES UTF8");
?>