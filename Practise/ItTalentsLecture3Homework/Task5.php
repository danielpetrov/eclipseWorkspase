<?php
// Задача 5: Да се въведат от потребителя 2 числа. И да се изведат 
//на екрана всички числа от по-малкото до по-голямото.

require_once 'Readline.php';

$firstNumber = ( int ) readline ( "Enter firstNumber:" . PHP_EOL );

$lastNumber = ( int ) readline ( "Enter lastNumber:" . PHP_EOL );

for ($i = $firstNumber; $i <= $lastNumber; $i++) {
	echo $i . " ";
}