<?php

if (!$_POST['login'] || !$_POST['passwd'])
{
	echo 'ERROR\n';
	return;
}
if (!file_exists('../private'))
	mkdir('../private');
if (file_exists('../private/passwd'))
{
	$content = unserialize(file_get_contents('../private/passwd'));
	foreach ($content as $account)
	{
		if ($account['login'] == $_POST['login'])
		{
			echo 'ERROR\n';
			return;
		}
	}
}
else
	$content = array();
$content[] = array(
	'login' => $_POST['login'],
	'passwd' => hash('whirlpool', $_POST['passwd'])
);
file_put_contents('../private/passwd', serialize($content));
echo 'OK\n';


?>
