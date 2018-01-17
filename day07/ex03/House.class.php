<?php

abstract class House {

	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();

	public function introduce()
	{
		print("House " . STATIC::getHouseName() . " of " .
			STATIC::getHouseSeat() . " : \"" . STATIC::getHouseMotto() .
			"\"" . PHP_EOL);
	}

}
