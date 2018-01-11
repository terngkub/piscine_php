#!/usr/bin/php
<?php

$fd = fopen("/var/run/utmpx", "r");
$arr = array();
while ($line = fread($fd, 628))
{
	$utmpx = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $line);
	if ($utmpx['type'] == 7)
		$arr[$utmpx['time1']] = $utmpx;
}
fclose($fd);
ksort($arr);
date_default_timezone_set('Europe/Paris');
foreach ($arr as $key => $user)
{
	$name = trim($user['user']);
	$post = trim($user['line']);
	$month = date("M", $user['time1']);
	$date = date("j", $user['time1']);
	$time = date("H:i", $user['time1']);
	printf("%-12s %-7s  %s %2s %s\n", $name, $post, $month, $date, $time);
}

?>
