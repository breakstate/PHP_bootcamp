<?PHP
session_start();
$login = $_GET["login"];
$passwd = $_GET["passwd"];
$submit = $_GET["submit"];
if ($login !== NULL && $passwd !== NULL && $submit == "OK")
{
	$_SESSION["login"] = $login;
	$_SESSION["passwd"] = $passwd;
}
?>

<html><body>
<form action="index.php" method="get">
<input type="text" name="login" value="<?php echo $_SESSION['login']; ?>"> Login<br>
<input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>"> Password<br>
<input type="submit" value="OK"> Submit<br>
</form>
</body></html>
