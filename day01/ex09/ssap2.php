#!/usr/bin/php
<?PHP
function cmp($a, $b)
{
	$i = 0;
	$tmp = "abcdefghijklmnopqrstuvwxyz0123456789!\"
			#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$a_index = stripos($tmp, $a[$i]);
		$b_index = stripos($tmp, $b[$i]);
		if ($a_index > $b_index)
			return (1);
		else if ($a_index < $b_index)
			return (-1);
		else
			$i++;
	}
}
$aс = 1;
$word = array();
foreach ($argv as $elem)
{
	if ($aс++ > 1)
	{
		$line = preg_split("/ +/", trim($elem));
		if ($line[0] != "")
			$word = array_merge($word, $line);
	}
}
usort($word, "cmp");
foreach ($word as $elem)
	echo "$elem"."\n";
?>