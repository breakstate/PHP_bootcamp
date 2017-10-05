#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit;
$words = explode(" ", trim($argv[1]. ' '));
$last_index = count($words) - 1;
$temp = $words[0];
foreach ($words as $index => $word)
{
	if ($index < $last_index)
		$words[$index] = $words[$index + 1];
}
$words[$last_index] = $temp;
$str = implode(" ", $words);
$str = preg_replace("/[  ]+/"," ", $str);
echo "$str\n";
?>
