<?php
/*
 * �� �� ������� ��������, �����
 * ������� �� �������
 * 2 ����������
 * ���������� ����� a,b.
 * ���������� �� ������ ��������� ���� ���������� ����� ��
 * �������������� �� ����� ����� � �����, ����� � ������ �����.
 * ������ �����: a,b - ���������� ����� �� ��������� [10..99].
 * ������: 15, 25
 * �����: 375, 5 �������
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$a = readline ( "Please enter a in Range [10..99]: " . PHP_EOL );
$b = readline ( "Please enter b in Range [10..99]: " . PHP_EOL );

try {
	checkIfNumber ( $a, "\$a" );
	checkIfNumber ( $b, "\$b" );
	
	checkIfWholeNumber ( $a, "\$a" );
	checkIfWholeNumber ( $b, "\$b" );
	
	checkIfNumberIsInRange ( 10, 99, $a, "\$a" );
	checkIfNumberIsInRange ( 10, 99, $b, "\$b" );
	
	$product = ( string ) ($a * $b);
	$lastNumberPossition = 2;
	
	if ($product > 999) {
		$lastNumberPossition = 3;
	}
	
	echo $product . ", " . $product [$lastNumberPossition] . " ";
	
	if (! (( int ) $product % 2)) {
		echo "�����";
	} else {
		echo "�������";
	}
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}