<?php

class TheftCalculation extends AbstractCalculation {
	public function __construct($min, $max) {
		$this->min = $min;
		$this->max = $max;
	}

	protected function doCalculation($money) {
		$this->amount = rand($this->min, $this->max);
		echo "you lost {$this->amount} due to theft" . PHP_EOL;
		return $money - $this->amount;
	}

}