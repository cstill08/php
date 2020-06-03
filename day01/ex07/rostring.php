#!/usr/bin/php
<?PHP
$i = 1;
$counter = 0;

if ($argc > 1)
{
	while ($counter < $argc)
	{
		$str = trim($argv[1]);
		$str = preg_replace("/\s+/", " ", $str);
		$word = explode(" ", $str);
		$counter++;
	}
	$size = count($word);
	while ($i < $size)
	{
		echo ($word[$i] . " ");
		$i++;
	}
	echo ($word[0] . "\n");
}
?>