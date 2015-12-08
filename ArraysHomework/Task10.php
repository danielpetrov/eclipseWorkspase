<?php
/* Задача 10:
Да се състави програма, чрез която се въвеждат 7 цели числа в
едномерен масив.
Програмата да изведе числото, което е най-близко до средната
стойност на въведените числа.
Пример: 1,2,3,4,5,6,7
Изход: средна стойност 4, най-близка стойност 4 */

require_once 'Readline.php';

$someIntegerArray = [];
$sum = 0;

for ($i = 0; $i < 7; $i++) {
	$someIntegerArray[] = $nextIntegerValue = (int) readline("Enter next element of the array: ");
	$sum += $nextIntegerValue;
}

$average = $sum / 7;
$minDifference = PHP_INT_MAX;

foreach($someIntegerArray as $number){
	$difference = abs($number - $average);
	if ($difference < $minDifference) {
		$minDifference = $difference;
		$closestNumberToAverage = $number;
	}
}
echo "Average value is $average" . PHP_EOL;

echo "Closest number to average is $closestNumberToAverage";