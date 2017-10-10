<?PHP
if (!(file_exists("./private")))
	mkdir("./private", 0777);
$login = $_POST["login"];
$passwd = $_POST["passwd"];
$submit = $_POST["submit"];
if ($submit == "OK" && $passwd !== "" && $login !== "")
{
	$hashed = hash("whirlpool", $passwd);
	$arr_usr["login"] = $login;
	$arr_usr["passwd"] = $hashed;
}
else
{
	echo "ERROR\n";
	return("ERROR\n");
}
if (file_exists("./private/passwd"))
{
	$string = file_get_contents("./private/passwd");
	$arr = unserialize($string);
}
foreach ($arr as $value)
{
	if ($value["login"] === $login)
	{
		echo "ERROR\n";
		return ("ERROR\n");
	}
}
$arr[] = $arr_usr;
foreach ($arr as $value)
{
	print_r($value);
}
file_put_contents("./private/passwd", serialize($arr));
?>
