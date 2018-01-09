<?php

function ft_split($sentence)
{
	$arr = array_filter(explode(" ", $sentence));
	sort($arr);
	return ($arr);
}

?>
