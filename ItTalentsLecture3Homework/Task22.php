<?php
/*
 * Задача 22:
 * Да се състави програма, която извежда първите 10 най-малки
 * числа, които се делят на 2, 3 или на 5 и които са по-големи от
 * въведено естествено число.
 * Числата се извеждат, заедно с техния пореден номер.
 * Входни данни: число от интервала [1..999]
 * Пример: 1
 * Изход: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
 * Използвайте цикъл while.
 */
require_once 'Readline.php';

$startingIndex = ( int ) readline ( "Enter number in Range[1..999]:" . PHP_EOL );

$counterToTen = 1;

$currentNumber = $startingIndex;

while ( $counterToTen <= 10 ) {
	
	if (! ($currentNumber % 2) || ! ($currentNumber % 3) || ! ($currentNumber % 5)) {
		echo $counterToTen++ . ":" . $currentNumber . PHP_EOL;
	}
	
	if (++$currentNumber > 999) {
		break;
	}
}


