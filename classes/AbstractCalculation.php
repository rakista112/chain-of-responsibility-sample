<?php

abstract class AbstractCalculation {
	private $amount;
	private $nextCalculation = null;

	public function setNextCalculation(AbstractCalculation $calculation){
		$this->nextCalculation = $calculation;
		return $calculation;
	}

	abstract protected function doCalculation($money);

	public function calculate(float $money) {
		$result = $this->doCalculation($money);

		if($this->nextCalculation != null) {
			return $this->nextCalculation->calculate($result);
		} else {
			return $result;
		}
	}
}