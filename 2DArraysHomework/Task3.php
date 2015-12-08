<?php
/* Задача 3:
Имате двумерен масив от числа,
чийто стойности са въведени
предварително. Да се отпечатат сумата на елементите на масива,
както и средноаритметичното на тези числа */

//require_once 'NonNativeFunctons.php';

$arrayMulty = [
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9]
];

$sumOfElements = 0;

foreach ($arrayMulty as $rowIndex => $rowAsArray) {
	foreach ($rowAsArray as $colIndex => $colValue) {
		$sumOfElements += $colValue;
	}
}

$average = $sumOfElements / count_multy($arrayMulty);

echo "Sum of all elements = $sumOfElements" . PHP_EOL . 
	"Average = $average";

/**
 * Returns the number of elements in two dimentional array
 *
 * @param    $mixed_array
 * @return   $integer_count
 */

function count_multy($array){
	return count($array, COUNT_RECURSIVE) - count($array, COUNT_NORMAL);
}