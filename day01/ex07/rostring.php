#!/usr/bin/php
<?php

if ($argv > 1)
{
	$arr = array_filter(explode(" ", $argv[1]));
	$first = array_shift($arr);
	array_push($arr, $first);
	echo implode(" ", $arr) . "\n";
}

?>
