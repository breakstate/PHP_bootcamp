<?php
	if (isset($_GET["action"]))
	{
		$action = $_GET["action"];
		if ($action == "set")
		{
			echo "set\n";
			//echo $_GET["name"];
		   	//echo $_GET["value"];
			setcookie($_GET["name"], $_GET["value"], time()+3600);
		}
		else if ($action == "get")
		{
			echo "get\n";
			$name = $_GET["name"];
			//echo $name;
			if (isset($_COOKIE[$name]))
				echo "$_COOKIE[$name]\n";
		}
		else if ($action == "del")
		{
			echo "del\n";
			$name = $_GET["name"];
			echo $name;
			setcookie($_GET["name"], "", time()-3600);
			//unset($_COOKIE[$name]);
		}
	}
//$> curl -c cook.txt 'http://eXrXpX.42.fr:8080/j03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
//$> curl -b cook.txt 'http://eXrXpX.42.fr:8080/j03/ex03/cookie_crisp.php?action=get&name=plat'
//choucroute
//$> curl -c cook.txt 'http://eXrXpX.42.fr:8080/j03/ex03/cookie_crisp.php?action=del&name=plat'
//$> curl -b cook.txt 'http://eXrXpX.42.fr:8080/j03/ex03/cookie_crisp.php?action=get&name=plat'
?>
