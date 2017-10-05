#!/usr/bin/php
<?PHP
if ($argc !== 4)
	exit("Incorrect Parameters\n");
$num1 = preg_replace("/\s+/", '', $argv[1]);
$num2 = preg_replace("/\s+/", '', $argv[3]);
$op = preg_replace("/\s+/", '', $argv[2]);

if ($op == "+")
	$answer = $num1 + $num2;
else if ($op == "-")
	$answer = $num1 - $num2;
else if ($op == "/")
	$answer = $num1 / $num2;
else if ($op == "%")
	$answer = $num1 % $num2;
else if ($op == '*')
	$answer = ($num1 * $num2);
echo "$answer\n"
?>
