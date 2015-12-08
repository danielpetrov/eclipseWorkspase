<?php
/*
 * Задача 11:
 * Да се състави програма, която въвежда от клавиатурата 7 цели числа
 * в едномерен масив
 * Програмата да изведе всички числа кратни на 5, но по големи от 5.
 * Пример: -23, -55, 17, 75, 56, 105, 134
 * Изход: 75,105 2 числа
 */
require_once 'Readline.php';

$someIntegerArray = [ ];

for($i = 0; $i < 7; $i ++) {
	$someIntegerArray [] = ( int ) readline ( "Enter next element of the array: " );
}

foreach ( $someIntegerArray as $number ) {
	if ( !($number % 5) && ($number > 5)) {
		echo $number . PHP_EOL;
	}
}