<?php

class CreditCalculation extends AbstractCalculation {
	public function __construct($amount) {
		$this->amount = $amount;
	}

	protected function doCalculation($money) {
		echo "you gained {$this->amount}" . PHP_EOL;
		return $money + $this->amount;
	}

}