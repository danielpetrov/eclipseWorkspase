<?php
/*
 * Да се състави програма, която по въведени координати на 2 позиции
 * от шахматната дъска извежда отговор дали са оцветени в еднакъв или
 * различен цвят.
 * Шахматната дъска е квадратна.
 * Въвеждат се две двойки числа от интервала [1..8].
 * Пример: 2 2 3 2
 * Изход: Позициите са с различен цвят
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$chessBoardColumn1 = ( int ) readline ( "Please enter chessBoardColumn1 in Range [1..8]: " . PHP_EOL );
$chessBoardRow1 = ( int ) readline ( "Please enter chessBoardrow1 in Range [1..8]: " . PHP_EOL );

$chessBoardColumn2 = ( int ) readline ( "Please enter chessBoardColumn2 in Range [1..8]: " . PHP_EOL );
$chessBoardRow2 = ( int ) readline ( "Please enter chessBoardrow2 in Range [1..8]: " . PHP_EOL );

$squareOneisWhite = NULL;
$squareTwoisWhite = NULL;

// Solution : Everywhere in board if both row and col numbers are even or both are
// odd the color is Black. Еverywhere on board if both row and col are even/odd(one is odd
// and one is even) the color is White.
$squareOneisWhite = ! checkIfTwoNumbersAreBothEvenOrOdd ( $chessBoardColumn1, $chessBoardRow1 );

$squareTwoisWhite = ! checkIfTwoNumbersAreBothEvenOrOdd ( $chessBoardColumn2, $chessBoardRow2 );

if ($squareOneisWhite == $squareTwoisWhite) {
	echo "Позициите са с еднакъв цвят";
} else {
	echo "Позициите са с различен цвят";
}
function checkIfTwoNumbersAreBothEvenOrOdd($firstNumber, $secondNumber) {
	if ((! ($firstNumber % 2)) && (! ($secondNumber % 2)) || // check if both are even
(($firstNumber % 2) && ($secondNumber % 2))) { // check if both are odd
		return true;
	} else {
		return false;
	}
}