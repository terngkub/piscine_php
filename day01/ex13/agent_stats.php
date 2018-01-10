#!/usr/bin/php
<?php

if ($argc == 2 && ($argv[1] == "moyenne" || $argv[1] == "moyenne_user" ||
	$argv[1] == "ecart_moulinette"))
{
	$user = array();
	$moulinette = array();
	while ($input = fgets(STDIN))
	{
		$arr = explode(";", $input);
		if (!is_numeric($arr[1]))
			continue;
		if ($arr[2] == "moulinette")
			$moulinette[$arr[0]] = $arr[1];
		else
			$user[$arr[0]][] = $arr[1];
	}
	ksort($user);
	if ($argv[1] == "moyenne")
	{
		foreach ($user as $value)
		{
			$sum += array_sum($value);
			$amount += sizeof($value);
		}
		echo ($sum / $amount);
	}
	else if ($argv[1] == "moyenne_user")
	{
		foreach ($user as $key => $value)
		{
			$user_avg = array_sum($value) / sizeof($value);
			echo "$key:$user_avg\n";
		}
	}
	else if ($argv[1] == "ecart_moulinette")
	{
		foreach ($user as $key => $value)
		{
			$user_avg = array_sum($value) / sizeof($value);
			$diff = $user_avg - $moulinette[$key];
			echo "$key:$diff\n";
		}
	}
}

?>
