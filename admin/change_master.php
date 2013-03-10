<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Промяна на данни за фирмата - Мастер ООД</title>
	</head>
	<body>
	<h3>Форма</h3>
		<form action="change_master_data.php" method="post">
			Име на фирмата: <input type="text" name="company" /><br />
			Адрес: <input type="text" name="address" /><br />
			Телефон: <input type="text" name="telephone" /><br />
			Факс: <input type="text" name="fax" /><br />
			E-mail: <input type="text" name="email" /><br />
			Интернет страница: <input type="text" name="website" /><br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>