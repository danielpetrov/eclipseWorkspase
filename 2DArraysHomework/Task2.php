<?php
/* Задача 2:
Имате квадратен двумерен масив от естествени числа,
чийто стойности се въвеждат от конзолата. Да се отпечатат диагоналите на масива. */

require_once 'Readline.php';

$arrayMulty = [];

$rows = 3;
$cols = 3;

for ($row = 0; $row < $rows; $row++) {

	$arrayMulty[$row] = [];

	for ($col = 0; $col < $cols; $col++) {
		$arrayMulty[$row][$col] = readline(
				'Enter element [' . $row . '][' . $col . ']'
				);
	}
}

$mainDiagonal = [];
$secondDiagonal = [];

for ($i = 0; $i < $rows; $i++) {
	$mainDiagonal[] = $arrayMulty[$i][$i];
	$secondDiagonal[] = $arrayMulty[$rows - 1 - $i][$i];
}


echo implode(', ', $mainDiagonal) . PHP_EOL;
echo implode(', ', $secondDiagonal);