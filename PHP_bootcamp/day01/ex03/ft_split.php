#!/usr/bin/php
<?php
function ft_split($str)
{
	$arr = preg_split(/[\s,]+/, $str);
	//ereg_replace
	//preg_replace;
	sort($arr);
	return $arr;
}

$pop = "hello     my     name is";
print_r(ft_split($pop));
?>
