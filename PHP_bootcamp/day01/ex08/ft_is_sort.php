#!/usr/bin/php
<?PHP


$tab = array("andrew", "42", "hello", "zebra", "sigh");
print_r($tab);

ft_is_sort($tab);
$tab = sort($tab);
ft_is_sort($tab);

function ft_is_sort($array)
{
	$sorted = $array;
	sort($sorted);
	foreach($array as $key => $value)
	{
		if ($array[$key] !== $sorted[$key])
		{
			return("The array is not sorted\n");
			exit;
		}
	}
	return("The array is sorted\n");
}

?>
