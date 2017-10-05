#!/usr/bin/php
<?PHP
//europe/paris

function convert_month($month)
{
	if ($month == "janvier" || $month == "Janvier")
		$month = "Jan";
	else if ($month == "février" || $month == "Février")
		$month = "Feb";
	else if ($month == "mars" || $month == "Mars")
		$month = "Mar";
	else if ($month == "avril" || $month == "Avril")
		$month = "Apr";
	else if ($month == "mai" || $month == "Mai")
		$month = "May";
	else if ($month == "juin" || $month == "Juin")
		$month = "Jun";
	else if ($month == "juillet" || $month == "Juillet")
		$month = "Jul";
	else if ($month == "août" || $month == "Août")
		$month = "Aug";
	else if ($month == "septembre" || $month == "Septembre")
		$month = "Sep";
	else if ($month == "octobre" || $month == "Octobre")
		$month = "Oct";
	else if ($month == "novembre" || $month == "Novembre")
		$month = "Nov";
	else if ($month == "décembre" || $month == "Décembre")
		$month = "Dec";
	else
		return ("fail");
	return($month);
}

function convert_day($day)
{
	if ($day == "lundi" || $day == "Lundi")
		$day = "Mon";
	else if ($day == "mardi" || $day == "Mardi")
		$day = "Tue";
	else if ($day == "mercredi" || $day == "Mercredi")
		$day = "Wed";
	else if ($day == "jeudi" || $day == "Jeudi")
		$day = "Thu";
	else if ($day == "vendredi" || $day == "Vendredi")
		$day = "Fri";
	else if ($day == "samedi" || $day == "Samedi")
		$day = "Sat";
	else if ($day == "dimanche" || $day == "Dimanche")
		$day = "Sun";
	else 
		return("fail");
	return($day);
}

date_default_timezone_set("Europe/Paris");

if ($argc !== 2)
	exit;
$format_arr = (explode(" ", trim($argv[1])));
$arrcount = count($format_arr);
if ($arrcount !== 5)
{
	echo "$arrcount";
	exit("Wrong Format1\n");
}

$day = convert_day($format_arr[0]);
if ($day == "fail")
	exit("Wrong Format2\n");

if ($format_arr[1] > 31)
	exit("Wrong Format3\n");

$month = convert_month($format_arr[2]);
if ($month == "fail")
	exit("Wrong Format4\n");

if (!(strlen($format_arr[3]) == 4 and is_numeric($format_arr[3])))
	exit("Wrong Format5\n");

$time_arr = explode(":", $format_arr[4]);
$time_count = count($time_arr);
if ($time_count !== 3)
	exit("Wrong Format\n");
foreach($time_arr as $segment)
{
	if (strlen($segment) !== 2)
		exit("Wrong Format\n");
}
$time_str = implode(":", $time_arr);

$res = $day . ' ' . $format_arr[1]. ' ' . $month . ' ' . $format_arr[3] . ' ' . $time_str; 

echo strtotime("$res");
echo "\n";
?>
