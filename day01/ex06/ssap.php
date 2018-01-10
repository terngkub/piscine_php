#!/usr/bin/php
<?php

if ($argc > 1)
{
	$arr = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$new = array_filter(explode(" ", $argv[$i]));
		$arr = array_merge($arr, $new);
	}
	sort($arr);
	foreach ($arr as $elem)
	{
		echo $elem . "\n";
	}
}

?>
