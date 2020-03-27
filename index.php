<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas ISA Week 6</title>
</head>
<body>
	<form method="POST" action='catch.php'>
		<label for='user'>Username: </label>
		<input id='user' type="text" name="username">
		<br>
		<br>
		<label for='pass'>Password: </label>
		<input id='pass' type="text" name="password">
		<br>
		<input type="submit" value='Regis'>
	</form>
</body>
</html>
