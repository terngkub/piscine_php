<?php

class NightsWatch {

	private $fighters = array();

	public function recruit($name) {
		if (class_implements($name)["IFighter"])
			$this->fighters[] = $name;
	}

	public function fight() {
		foreach ($this->fighters as $name)
			$name->fight();
	}

}

?>
