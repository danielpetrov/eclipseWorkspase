<?php
//Задача 6
/* Да се прочете число от екрана(конзолата) и да се 
изведе сбора на всички числа между 1 и въведеното число */

require_once 'Readline.php';

$finalNumber = ( int ) readline ( "Enter finalNumber:" . PHP_EOL );

$sum = 0;

for ($i = 1; $i <= $finalNumber; $i++) {
	$sum += $i;
}

echo $sum;