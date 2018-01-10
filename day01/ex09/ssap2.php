#!/usr/bin/php
<?php

function check_type($c)
{
	if (preg_match('/[a-z]/', $c))
		return 1;
	else if (preg_match('/[0-9]/', $c))
		return 2;
	return 3;
}

function ssap2_compare($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	for ($i = 0; $a[$i] && $b[$i]; $i++)
	{
		$type_a = check_type(substr($a, $i, 1));
		$type_b = check_type(substr($b, $i, 1));
		if ($type_a < $type_b)
			return -1;
		else if ($type_a > $type_b)
			return 1;
		else if ($a[$i] != $b[$i])
			return ($a[$i] < $b[$i]) ? -1 : 1;
		$i++;
	}
	if ($a[$i] != $b[$i])
		return ($a[$i] < $b[$i]) ? -1 : 1;
	return (0);
}

if ($argc > 1)
{
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$new = array_filter(explode(" ", $argv[$i]));
		$arr = array_merge($arr, $new);
	}
	usort($arr, ssap2_compare);
	foreach($arr as $elem)
	{
		echo $elem . "\n";
	}
}

?>
