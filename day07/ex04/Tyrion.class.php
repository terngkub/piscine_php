<?php

class Tyrion extends Lannister {

	public function sleepWith($name) {
		if (get_parent_class($this) == get_parent_class($name))
			print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this" . PHP_EOL);
	}
	
}

?>
