<?php
/*
 * Задача 6:
 * Напишете програма, която първо чете 2 масива и после извежда
 * съобщение дали са еднакви, и дали са с еднакъв размер
 */
require_once 'Readline.php';

$firstArray = [ ];
$secondArray = [ ];

do {
	$inputValue = readline ( "Enter next element for first array: " );
	
	if ($inputValue !== '') {
		$firstArray = $inputValue;
	}
} while ( $inputValue != '' );

do {
	$inputValue = readline ( "Enter next element for second array: " );
	
	if ($inputValue !== '') {
		$secondArray = $inputValue;
	}
} while ( $inputValue != '' );

echo $firstArray === $secondArray ? "Масивите са еднакви" . PHP_EOL : "Масивите са различни" . PHP_EOL;

echo count ( $firstArray ) == count ( $secondArray ) ? "Масивите са с еднаква дължина" : "Масивите са с различна дължина";