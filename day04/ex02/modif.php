<?php

if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || !file_exists('../private/passwd'))
{
	echo 'ERROR\n';
	return;
}
$content = unserialize(file_get_contents('../private/passwd'));
$exist = 0;
foreach ($content as $key => $account)
{
	$oldpw = hash('whirlpool', $_POST['oldpw']);
	if ($account['login'] == $_POST['login'] && $account['passwd'] == $oldpw)
	{
		$exist = 1;
		$content[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
	}
}
if (!$exist)
{
	echo 'ERROR\n';
	return;
}
file_put_contents('../private/passwd', serialize($content));
echo 'OK\n';

?>
