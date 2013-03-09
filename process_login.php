<?php
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysql_query("SELECT * FROM `users` WHERE username = '$username' AND password = '$password'");


if(mysql_num_rows($result)==1)
{

while($row = mysql_fetch_array($result))
{ 
extract($row);
$fullname = $full_name;
$admin = $admin;
 // Login
session_start();
$_SESSION['username'] = $username;
$_SESSION['fullname'] = $fullname;
$_SESSION['admin'] = $admin;


session_register("username");
session_register("fullname");
session_register("admin");

if ($admin=1) {
header ('Location: admin/index.php');
}
else {
header ('Location: index.html');
}
}

}

else
{
  // Invalid username/password
  echo '<p><strong>Error:</strong> Invalid username or password.</p>';
}
?>