<?php
/*
 * ������ 11:
 * �� �� ������� ��������, ����� ������� �� ������������ 7 ���� �����
 * � ��������� �����
 * ���������� �� ������ ������ ����� ������ �� 5, �� �� ������ �� 5.
 * ������: -23, -55, 17, 75, 56, 105, 134
 * �����: 75,105 2 �����
 */
require_once 'Readline.php';

$someIntegerArray = [ ];

for($i = 0; $i < 7; $i ++) {
	$someIntegerArray [] = ( int ) readline ( "Enter next element of the array: " );
}

foreach ( $someIntegerArray as $number ) {
	if ( !($number % 5) && ($number > 5)) {
		echo $number . PHP_EOL;
	}
}