<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Change company data</title>
	</head>
	<body>
	<h3>Form</h3>
		<form action="change_master_data.php" method="post">
			Company name: <input type="text" name="company" /><br />
			Address: <input type="text" name="address" /><br />
			Telephone: <input type="text" name="telephone" /><br />
			Fax: <input type="text" name="fax" /><br />
			E-mail: <input type="text" name="email" /><br />
			Web page: <input type="text" name="website" /><br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>