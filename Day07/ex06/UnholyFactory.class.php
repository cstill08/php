<?PHP
class UnholyFactory
{
	private $_arr = [];
	public function absorb($type)
	{
		if ($type instanceof Fighter)
		{
			if (array_key_exists($type->getName(), $this->_arr))
				print("(Factory already absorbed a fighter of type ".
					$type->getName() . ")" . PHP_EOL);
			else
			{
				$this->_arr[$type->getName()] = $type;
				print("(Factory absorbed a fighter of type ".
					$type->getName() . ")" . PHP_EOL);
			}
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)".
				PHP_EOL);
		}
	}
	public function fabricate($rf)
	{
		if (array_key_exists($rf, $this->_arr))
		{
			print("(Factory fabricates a fighter of type " . $rf . ")".
				PHP_EOL);
			return (clone ($this->_arr[$rf]));
		}
		print("(Factory hasn't absorbed any fighter of type " . $rf . ")".
			PHP_EOL);
		return (null);
	}
}
?>
