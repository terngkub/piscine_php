#!/usr/bin/php
<?php

if ($argc == 2)
{
	echo implode(" ", array_filter(explode(" ", $argv[1]))) . "\n";
}

?>
