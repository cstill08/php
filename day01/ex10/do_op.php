#!/usr/bin/php
<?PHP
if ($argc == 4)
{
	$ac1 = trim($argv[1]);
	$operator = trim($argv[2]);
	$ac2 = trim($argv[3]);

	if ($operator == "-")
		$res = $ac1 - $ac2;
	elseif ($operator == "+") 
	{
		$res = $ac1 + $ac2;
	}
	elseif ($operator == '*') 
	{
		$res = $ac1 * $ac2;
	}
	elseif ($operator == "%") 
	{
		$res = $ac1 % $ac2;
	}
	elseif ($operator == '/') 
	{
		$res = $ac1 / $ac2;
	}
	echo $res;
	echo "\n";
}
else
	echo "Incorrect Parameters\n";
?>
