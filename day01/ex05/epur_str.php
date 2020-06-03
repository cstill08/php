#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$str = preg_replace('/\s\s+/', ' ', $argv[1]);
	$str = trim($str);
	if ($str)
		echo "$str" . "\n";
}
?>