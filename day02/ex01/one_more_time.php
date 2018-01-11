#!/usr/bin/php
<?php

if ($argc != 2)
	return;

$arr = explode(" ", $argv[1]);

if (sizeof($arr) != 5)
{
	echo "Wrong Format\n";
	return;
}

$arr[0][0] = strtolower($arr[0][0]);
$arr[2][0] = strtolower($arr[2][0]);

$day = array(
	"lundi",
	"mardi",
	"mercredi",
	"jeudi",
	"vendredi",
	"samedi",
	"dimanche"
);
$month = array(
	"janvier" => 1,
	"février" => 2,
	"mars" => 3,
	"avril" => 4,
	"mai" => 5,
	"juin" => 6,
	"juillet" => 7,
	"août" => 8,
	"septembre" => 9,
	"octobre" => 10,
	"novembre" => 11,
	"décembre" => 12
);

if (!in_array($arr[0], $day)
	|| !preg_match('/^([1-9]|[0-2]\d|3[01])$/', $arr[1])
	|| !array_key_exists($arr[2], $month)
	|| !preg_match('/^\d{4}$/', $arr[3])
	|| !preg_match('/^([01]\d|2[0-3]):[0-5]\d:[0-5]\d$/', $arr[4]))
{
	echo "Wrong Format\n";
	return;
}

$date = $arr[1] . "-" . $month[$arr[2]] . "-" . $arr[3] . " " . $arr[4];
date_default_timezone_set('Europe/Paris');
echo strtotime($date) . "\n";

?>
