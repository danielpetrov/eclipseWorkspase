<?php
/*
 * Задача9:
 * Напишете програма, в която потребителя въвежда масив, след което
 * елементите на масива се обръщат в обратен ред (Целта не е масива да
 * се отпечата в обратен ред, ами първо да се обърне, след което да се
 * отпечата в нормален ред). Пробвайте да решите задачата първо с един
 * допълнителен масив и после без да използвате друг масив.
 */
require_once 'Readline.php';

$someArray = [];

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someArray [] = $inputValue;
	}
} while ( $inputValue !== '' );

$reversedArray = [];
$someArrayLength = count($someArray);

for ($i = 0; $i < $someArrayLength; $i++) {
	$reversedArray[$someArrayLength - 1 - $i] = $someArray[$i];
}

for ($i = 0; $i < $someArrayLength / 2; $i++) {
		$exchanger = $someArray[$i];
		$someArray[$i] = $someArray[$someArrayLength - 1 - $i];
		$someArray[$someArrayLength - 1 - $i] = $exchanger;
}	

print_r($reversedArray);
print_r($someArray);