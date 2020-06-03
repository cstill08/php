#!/usr/bin/php
<?PHP
$ac = 0;
$arr = array();
foreach ($argv as $elem)
{
	if ($ac++ > 0)
	{
		$elem = trim($elem);
		$tmp = preg_split("/ +/", $elem);
		if ($tmp[0] != "")
			$arr = array_merge($arr, $tmp);
	}
}
sort($arr);
foreach ($arr as $elem)
	echo "$elem" . "\n";
?>