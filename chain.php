<?php

// application that demonstrates the chain of responsibility

// calculate expected amount left after applying calculations


spl_autoload_register(function($class) {
	require_once "classes/$class.php";
});

function main () {
	$pleteCalculation = new DebitCalculation(20);
	$kuyamCalculation = new DebitCalculation(10);

	$sweldoCalculation = new CreditCalculation(100);
	$kawatanCalculation = new TheftCalculation(10, 500);

	$pleteCalculation->setNextCalculation($kuyamCalculation)
					 ->setNextCalculation($sweldoCalculation)
					 ->setNextCalculation($kawatanCalculation);

	$money = 50;
	echo "you currently have $money" . PHP_EOL;
	$result = $pleteCalculation->calculate($money);
	echo "you have " . $result . " left" . PHP_EOL;
}

main();