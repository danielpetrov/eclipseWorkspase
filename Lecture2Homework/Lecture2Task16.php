<?php
/*
 * �������� � ���������� ���������� ����� �� ���� abc.
 * ������ �� �� ������� ����:
 * ��� a = b = c - �����: ������� �� �����;
 * ��� a>b>c - �����: ������� �� ��� �������� ���;
 * ��� a<b<c ������� �� � �������� ���;
 * � �����: ������� �� ����������, �� ����������� ������.
 * �� �� ������� ��������, ����� ������� ��������� �� ���������� ��
 * ������� �� ������� � �������.
 * ������: 345
 * �����: �������� ���.
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$threeDigitNumber = readline ( "Please enter whole number in Range [100..999]: " . PHP_EOL );

try {
	checkIfNumber ( $threeDigitNumber, "\$threeDigitNumber" );
	
	checkIfWholeNumber ( $threeDigitNumber, "\$threeDigitNumber" );
	
	checkIfNumberIsInRange ( 100, 999, $threeDigitNumber, "\$threeDigitNumber" );
	
	$a = $threeDigitNumber [0];
	$b = $threeDigitNumber [1];
	$c = $threeDigitNumber [2];
	
	if ($a == $b && $b == $c) {
		echo "������� �� �����.";
	} else if ($a < $b && $b < $c) {
		echo "������� �� ��� �������� ���.";
	} else if ($a > $b && $b > $c) {
		echo "������� �� ��� �������� ���.";
	} else {
		echo "������� �� ����������.";
	}
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit ( 1 );
}