<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Registration Form</title>
	</head>
	<body>
	<h3>Registration Form</h3>
		<form action="process_registration.php" method="post">
			User Name: <input type="text" name="username" /><br />
			Name (First and Last Name): <input type="text" name="fullname" /><br />
			Password: <input type="password" name="password" /><br />
			E-mail: <input type="text" name="email" /><br />
			Admin: <input type="checkbox" name="admin" value="1"/><br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>