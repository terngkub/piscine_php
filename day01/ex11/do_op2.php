#!/usr/bin/php
<?php

if ($argc != 2)
{
	echo "INcorrect Parameters\n";
	return ;
}
$arr = preg_split("/([\+\-\*\/\%])/", $argv[1], -1, PREG_SPLIT_DELIM_CAPTURE);
if (sizeof($arr) != 3)
{
	echo "Syntax Error\n";
	return ;
}
for ($i = 0; $i < 3; $i++)
{
	$arr[$i] = trim($arr[$i]);
}
if (!is_numeric($arr[0]) || !is_numeric($arr[2]) ||
	(($arr[1] == '/' || $arr[1] == '%') && $arr[2] == 0))
{
	echo "Syntax Error\n";
	return ;
}
if ($arr[1] == '+')
	echo ($arr[0] + $arr[2]) . "\n";
else if ($arr[1] == '-')
	echo ($arr[0] - $arr[2]) . "\n";
else if ($arr[1] == '*')
	echo ($arr[0] * $arr[2]) . "\n";
else if ($arr[1] == '/')
	echo ($arr[0] / $arr[2]) . "\n";
else if ($arr[1] == '%')
	echo ($arr[0] % $arr[2]) . "\n";

?>
