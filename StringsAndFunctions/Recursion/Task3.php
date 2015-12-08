<?php
/* Задача 3:
Да се състави програма, която проверява дали въведено естествено
число е просто.
Пример: 101
Изход: просто */

$n = 101;
$isPrime = checkIfPrime((int)$n, (int)sqrt($n));

echo $isPrime ? "просто" : "не е просто";

function checkIfPrime($n, $i){
	
	if ($n <= 1) {
		return false;
	}
	 if (!($n % $i)) {
		return false;
	} 
	if ($i == 2) {
		return true;
	}
	
	return checkIfPrime($n, $i - 1);
}