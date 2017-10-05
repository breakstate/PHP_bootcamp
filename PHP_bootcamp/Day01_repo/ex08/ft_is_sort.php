<?PHP
function ft_is_sort($tab)
{
	$sorted = $tab;
	sort($sorted);
	foreach($tab as $key => $value)
	{
		if ($tab[$key] !== $sorted[$key])
		{
			return(0);
			exit;
		}
	}
	return(1);
}
?>
