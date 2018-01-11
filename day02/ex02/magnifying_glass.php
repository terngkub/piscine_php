#!/usr/bin/php
<?php

$content = file_get_contents("page2.html");
echo $content;
echo "\n";

$pattern1 = "/(<a[^>]*>)([^<]*)(<.*>)?([^<]*)(<\/a>)/";
$replace1 = function ($part)
{
	return $part[1] . strtoupper($part[2]) . $part[3] . strtoupper($part[4]) . $part[5];
};
$content = preg_replace_callback($pattern1, $replace1, $content);

$pattern2 = '/(title=")([^"]*)(")/';
$replace2 = function ($part)
{
	return "$part[1]" . strtoupper($part[2]) . $part[3];
};
$content = preg_replace_callback($pattern2, $replace2, $content);

echo $content;

?>
