<?PHP
Class NightsWatch implements IFighter
{
	private $arr;
	public function recruit($man)
	{
		if ($man instanceof IFighter)
			$this->arr[] = $man;
	}
	public function fight()
	{
		foreach ($this->arr as $key=>$val)
		{
			$val->fight();
		}
	}
}
?>
