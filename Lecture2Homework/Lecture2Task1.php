<?php
/*
 * �� �� ������ �� ����������� �� ������ 3 ����� A, � � � (���� �� �� �
 * ������� �������) �� ���������.
 * �� �� ������ ��������� ��������� �� ���� ���� C � ����� A � B
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

Print "Please enter numbers for a, b and c" . PHP_EOL;

$a = readline ( "Enter a:" . PHP_EOL );

$b = readline ( "Enter b:" . PHP_EOL );

$c = readline ( "Enter c:" . PHP_EOL );

try {
	checkIfNumber ( $a, "\$a" );
	checkIfNumber ( $b, "\$b" );
	checkIfNumber ( $c, "\$c" );
	
	if (($a < $c) && ($c < $b)) {
		echo "The number " . $c . " is between the numbers " . $a . " and " . $b . PHP_EOL;
	} else {
		echo "The number " . $c . " is not between the numbers " . $a . " and " . $b . PHP_EOL;
	}
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}


