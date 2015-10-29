<?php
/*
 * �������� 2 �������� ����������� ����� �� ���������. ��������
 * ������� ����, �������, ������������, ������� �� ������� �
 * ����������� ������� � ������� ���������� � ������������ ����
 * ���������.
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

Print "Please enter whole numbers for a and b" . PHP_EOL;

$a = readline ( "Enter a:" . PHP_EOL );

$b = readline ( "Enter b:" . PHP_EOL );

try {
	checkIfNumber ( $a, "\$a" );
	checkIfNumber ( $b, "\$b" );
	
	checkIfWholeNumber ( $a, "\$a" );
	checkIfWholeNumber ( $b, "\$b" );
	
	$sum = $a + $b;
	$substraction = $a - $b;
	$product = $a * $b;
	$division = $a / $b;
	$remainderOfDivision = $a % $b;
	
	echo $a . " + " . $b . " = " . $sum . PHP_EOL;
	
	echo $a . " - " . $b . " = " . $substraction . PHP_EOL;
	
	echo $a . " * " . $b . " = " . $product . PHP_EOL;
	
	echo $a . " / " . $b . " = " . $division . PHP_EOL;
	
	echo $a . " % " . $b . " = " . $remainderOfDivision . PHP_EOL;
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}

