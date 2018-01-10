#!/usr/bin/php
<?php

$a_arr = array();
for ($i = 2; $i < $argc; $i++)
{
	$arr = explode(":", $argv[$i]);
	$a_arr[$arr[0]] = $arr[1];
}
echo $a_arr[$argv[1]] . "\n";

?>
