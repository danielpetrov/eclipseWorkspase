<?php
/*
 * �������� 2 �������� ����� �� ��������� � �� ������������ �
 * ��������� ���.
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

Print "Please enter numbers for a and b " . PHP_EOL;

$a = readline ( "Enter a:" . PHP_EOL );

$b = readline ( "Enter b:" . PHP_EOL );

try {
	checkIfNumber ( $a, "\$a" );
	checkIfNumber ( $b, "\$b" );
	
	if ($a > $b) {
		printf ( "b: %u \na: %u", $b, $a );
	} else {
		printf ( "a: %u \nb: %u", $a, $b );
	}
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}