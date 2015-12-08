<?php
/*
 * Задача 7:
 * Напишете програма, която първо чете масив и после създава нов
 * масив със същия размер по следния начин: стойността на всеки
 * елемент от втория масив да е равна на сбора от предходния и
 * следващият елемент на съответния елемент от първия масив.
 * Да се изведе получения масив.
 */
require_once 'Readline.php';

$someIntegerArray = [ ];

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someIntegerArray [] = ( int ) $inputValue;
	}
} while ( $inputValue != '' );

$newIntegerArray = [ ];

$someIntegerArrayLength = count ( $someIntegerArray );

for($i = 0; $i < $someIntegerArrayLength; $i ++) {
	$sum = 0;
	
	if ($i > 0) {
		$sum += $someIntegerArray [$i - 1];
	}
	
	if ($i < $someIntegerArrayLength - 1) {
		$sum += $someIntegerArray [$i + 1];
	}
	
	$newIntegerArray [] = $sum;
}

print_r ( $newIntegerArray );