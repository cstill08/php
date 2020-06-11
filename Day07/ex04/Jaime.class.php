<?PHP
class Jaime extends Lannister
{
	public function sleepWith($man)
	{
		if ($man instanceof Tyrion)
			print("Not event if I'm drunk !" . "\n");
		else if ($man instanceof Sansa)
			print("Let's do this." . "\n");
		else if ($man instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." . "\n");
	}
}
?>
