<?php

function auth($login, $passwd)
{
	$content = unserialize(file_get_contents('../private/passwd'));
	foreach ($content as $account)
	{
		$hash_passwd = hash('whirlpool', $passwd);
		if ($account['login'] == $login && $account['passwd'] == $hash_passwd)
			return true;
	}
	return false;
}

?>
