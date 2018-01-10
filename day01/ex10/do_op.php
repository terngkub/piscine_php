#!/usr/bin/php
<?php

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}
$num1 = trim($argv[1]);
$op = trim($argv[2]);
$num2 = trim($argv[3]);
if ($op == '+')
	echo ($num1 + $num2) . "\n";
else if ($op == '-')
	echo ($num1 - $num2) . "\n";
else if ($op == '*')
	echo ($num1 * $num2) . "\n";
else if ($op == '/')
	echo ($num1 / $num2) . "\n";
else if ($op == '%')
	echo ($num1 % $num2) . "\n";
?>
