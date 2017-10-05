#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit;

$args = trim(implode(' ', array_slice($argv, 1)));
$args = preg_replace("/[  ]+/", " ", $args);
$args_arr = explode(" ", $args);

$numeric = array();
$alpha = array();
$spec = array();

foreach($args_arr as $value)
{
	if (is_numeric($value))
		array_push($numeric, $value);
	else if (!(ctype_alpha($value)))
		array_push($spec, $value);
	else
		array_push($alpha, $value);
}

natcasesort($alpha);
sort($spec);
sort($numeric, SORT_STRING);

$res = array_merge($alpha, $numeric, $spec);
foreach($res as $value)
	echo "$value\n";
?>
