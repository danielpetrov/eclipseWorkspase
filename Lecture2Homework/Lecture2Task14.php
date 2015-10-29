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

$chessBoardColumn1 = readline ( "Please enter chessBoardColumn1 in Range [1..8]: " . PHP_EOL );
$chessBoardRow1 = readline ( "Please enter chessBoardrow1 in Range [1..8]: " . PHP_EOL );

$chessBoardColumn2 = readline ( "Please enter chessBoardColumn2 in Range [1..8]: " . PHP_EOL );
$chessBoardRow2 = readline ( "Please enter chessBoardrow2 in Range [1..8]: " . PHP_EOL );

try {
	checkIfNumber ( $chessBoardColumn1, "\$chessBoardColumn1" );
	checkIfNumber ( $chessBoardColumn2, "\$chessBoardColumn2" );
	checkIfNumber ( $chessBoardRow1, "\$chessBoardRow1" );
	checkIfNumber ( $chessBoardRow2, "\$chessBoardRow2" );
	
	checkIfWholeNumber ( $chessBoardColumn1, "\$chessBoardColumn1" );
	checkIfWholeNumber ( $chessBoardColumn2, "\$chessBoardColumn2" );
	checkIfWholeNumber ( $chessBoardRow1, "\$chessBoardRow1" );
	checkIfWholeNumber ( $chessBoardRow2, "\$chessBoardRow2" );
	
	checkIfNumberIsInRange ( 1, 8, $chessBoardColumn1, "\$chessBoardColumn1" );
	checkIfNumberIsInRange ( 1, 8, $chessBoardColumn2, "\$chessBoardColumn2" );
	checkIfNumberIsInRange ( 1, 8, $chessBoardRow1, "\$chessBoardRow1" );
	checkIfNumberIsInRange ( 1, 8, $chessBoardRow2, "\$chessBoardRow2" );
	
	$squareOneisWhite = NULL;
	$squareTwoisWhite = NULL;
	
	// Solution : Everywhere in board if both row and col numbers are even or both are
	// odd the color is Black. �verywhere on board if both row and col are even/odd(one is odd
	// and one is even) the color is White.
	$squareOneisWhite = !checkIfTwoNumbersAreBothEvenOrOdd($chessBoardColumn1, $chessBoardRow1);
	
	$squareTwoisWhite = !checkIfTwoNumbersAreBothEvenOrOdd($chessBoardColumn2, $chessBoardRow2);
	
	if ($squareOneisWhite == $squareTwoisWhite) {
		echo "��������� �� � ������� ����";
	} else {
		echo "��������� �� � �������� ����";
	}
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}

function checkIfTwoNumbersAreBothEvenOrOdd($firstNumber, $secondNumber){
	if ((! ($firstNumber % 2)) && (! ($secondNumber % 2)) || // check if both are even
			(($firstNumber % 2) && ($secondNumber % 2))) { // check if both are odd
				return true;
	} else{
		return false;
	}
}