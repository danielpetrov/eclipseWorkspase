<?php
// Task4. Write a program that tells you if a number is prime.//prosto chislo
require_once 'Readline.php';
$a = ( int ) floor ( readline ( "Please enter a: " . PHP_EOL ) );

$isPrime = true;

if ($a <= 1) {
	$isPrime = false;
	}

for($i = 2; $i < $a; $i ++) {
	if (!($a % $i)) {
		$isPrime = false;
		break;
	}
}

if ($isPrime) {
	echo "The number is prime";
} else {
	echo "The number is not prime";
}
 