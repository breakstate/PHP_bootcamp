#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	$line = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		exit("^D\n");
	}
	if (!is_numeric($line))
		echo "'".$line."' is not a number\n";
	else if ($line % 2 == 0)
		echo "The number ".$line." is even\n";
	else
		echo "The number ".$line." is odd\n";
}
?>
