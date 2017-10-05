#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit;
$str = implode(" ", array_slice($argv, 1));
$str = trim(preg_replace("/[  ]+/", " ", $str));
$arr = explode(' ', $str);
sort($arr);
foreach($arr as $arg)
	echo "$arg\n";
?>
