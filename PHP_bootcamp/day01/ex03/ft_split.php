#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$str = trim(preg_replace("/[ ]+/", " ", $str));
	$arr = preg_split("/ /", $str);
	sort($arr);
	return ($arr);
}
;
print_r (ft_split("Hello     World AAA"));

?>
