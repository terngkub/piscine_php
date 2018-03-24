<?php
session_start();
if ($_GET['login'])
	$_SESSION['login'] = $_GET['login'];
if ($_GET['passwd'])
	$_SESSION['passwd'] = $_GET['passwd'];
?>

<html>
<form method="get">
	Username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
	<br />
	Password: <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
	<input type="submit" value="OK" />
</form>
<body>
