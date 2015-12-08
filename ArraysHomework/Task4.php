<?php
/*
 * Задача 4:
 * Да се прочете масив и да се отпечата дали е огледален.
 * Следните масиви са огледални:
 * [3 7 7 3]
 * [4]
 * [1 55 1]
 * [6 27 -1 5 7 7 5 -1 27 6]
 */
require_once 'Readline.php';

$someArray = [ ];

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someArray [] = $inputValue;
	}
} while ( $inputValue !== '' );

$isMirrorLikeArray = true;

$arrayLength = count ( $someArray );

for($i = 0; $i < $arrayLength / 2; $i ++) {
	if ($someArray [$i] !== $someArray [$arrayLength - $i - 1]) {
		$isMirrorLikeArray = false;
	}
}

echo $isMirrorLikeArray ? "масива е огледален" : "масива не е огледален";