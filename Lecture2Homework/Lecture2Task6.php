<?php
/*
 * �������� 3 ����� �� ��������� - �1, �2 � �3. ��������� ����������� ��
 * ����, �� �1 �� ��� ���������� �� �2, �2 �� ��� ���������� �� �3, � �3
 * �� ��� ������� �������� �� �1
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

Print "Please enter numbers for a, b and c" . PHP_EOL;

$a1 = readline ( "Enter a1:" . PHP_EOL );

$a2 = readline ( "Enter a2:" . PHP_EOL );

$a3 = readline ( "Enter a3:" . PHP_EOL );

try {
	checkIfNumber ( $a1, "\$a" );
	checkIfNumber ( $a2, "\$b" );
	checkIfNumber ( $a3, "\$c" );
	
	Print ("Before exchange: " . PHP_EOL) ;
	printf ( "a1 : %s " . PHP_EOL, $a1 );
	printf ( "a2 : %s" . PHP_EOL, $a2 );
	printf ( "a3 : %s" . PHP_EOL, $a3 );
	
	$theExchanger = NULL;
	$theSecondExchanger = NULL;
	
	$theExchanger = $a3;
	$a3 = $a1;
	$theSecondExchanger = $a2;
	$a2 = $theExchanger;
	$a1 = $theSecondExchanger;
	
	$theExchanger = NULL;
	$theSecondExchanger = NULL;
	
	Print ("After exchange: " . PHP_EOL) ;
	printf ( "a1 : %s " . PHP_EOL, $a1 );
	printf ( "a2 : %s" . PHP_EOL, $a2 );
	printf ( "a3 : %s" . PHP_EOL, $a3 );
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}