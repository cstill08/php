<?PHP
class Tyrion extends Lannister
{
	public function sleepWith($man)
	{
		if ($man instanceof Lannister)
			print("Not event if I'm drunk !" ."\n");
		else if ($man instanceof Sansa)
			print("Let's do this." . "\n");
	}
}
?>
