<?php
/*
 * �� �� ������� ��������, ����� �� �������� ���������� �� 2 �������
 * �� ���������� ����� ������� ������� ���� �� �������� � ������� ���
 * �������� ����.
 * ���������� ����� � ���������.
 * �������� �� ��� ������ ����� �� ��������� [1..8].
 * ������: 2 2 3 2
 * �����: ��������� �� � �������� ����
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
// odd the color is Black. �verywhere on board if both row and col are even/odd(one is odd
// and one is even) the color is White.
$squareOneisWhite = ! checkIfTwoNumbersAreBothEvenOrOdd ( $chessBoardColumn1, $chessBoardRow1 );

$squareTwoisWhite = ! checkIfTwoNumbersAreBothEvenOrOdd ( $chessBoardColumn2, $chessBoardRow2 );

if ($squareOneisWhite == $squareTwoisWhite) {
	echo "��������� �� � ������� ����";
} else {
	echo "��������� �� � �������� ����";
}
function checkIfTwoNumbersAreBothEvenOrOdd($firstNumber, $secondNumber) {
	if ((! ($firstNumber % 2)) && (! ($secondNumber % 2)) || // check if both are even
(($firstNumber % 2) && ($secondNumber % 2))) { // check if both are odd
		return true;
	} else {
		return false;
	}
}