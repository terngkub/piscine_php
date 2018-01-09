<?php

function ft_is_sort($arr)
{
	if (sizeof($arr) < 2)
		return (true);
	for ($i = 1; $i < sizeof($arr); $i++)
	{
		if ($arr[$i] < $arr[$i - 1])
			return (false);
	}
	return (true);
}

?>
