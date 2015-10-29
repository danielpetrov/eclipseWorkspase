<?php
/*
 * ��������� ��������, ����� �� ������ ���������o ����� ���������
 * ���� ������� �� ���� �� ����� ���� �����. ��� ���������� ����� ��
 * ���� ����� 0.
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$number = readline ( "Please enter number in Range [100..999] without zeros: " . PHP_EOL );

try {
	checkIfNumber ( $number, "\$number" );
	
	checkIfWholeNumber ( $number, "\$number" );
	
	checkIfNumberIsInRange ( 100, 999, $number );
	
	checkIfStringDoesntContainValue ( $number, '0', "The number" );
	
	if (! ($number % $number [0])) {
		echo "The number" . $number . " is dividable by " . $number [0] . PHP_EOL;
	}
	
	if (! ($number % $number [1])) {
		echo "The number" . $number . " is dividable by " . $number [1] . PHP_EOL;
	}
	
	if (! ($number % $number [2])) {
		echo "The number" . $number . " is dividable by " . $number [2] . PHP_EOL;
	}
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}