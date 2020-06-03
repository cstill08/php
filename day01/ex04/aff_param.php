#!/usr/bin/php
<?PHP
$ac = 0;
foreach ($argv as $elem)
{
	if ($ac++ > 0)
		echo "$elem" . "\n";
}
?>