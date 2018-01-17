<?php

class UnholyFactory {

	private $types = array();

	public function absorb($target) {
		if (get_parent_class($target) == "Fighter")
		{
			if (in_array($target->type, $this->types))
				print("(Factory already absorbed a fighter of type $target->type)" . PHP_EOL);
			else
			{
				print("(Factory absorbed a fighter of type $target->type)" . PHP_EOL);
				$this->types[] = $target->type;
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($fighter) {
		if ($fighter != "llama")
		{
			print ("(Factory fabricates a fighter of type $fighter)" . PHP_EOL);
			switch ($fighter) {
				case "foot soldier":
					return new Footsoldier();
					break;
				case "archer":
					return new Archer();
					break;
				case "assassin":
					return new Assassin();
					break;
			}
		}
		else
			print ("(Factory hasn't absorbed any fighter of type llama)" . PHP_EOL);
	}

}

?>
