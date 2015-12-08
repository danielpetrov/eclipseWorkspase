<?php
/*
 * ������ 7:
 * �������� ��������, ����� ����� ���� ����� � ����� ������� ���
 * ����� ��� ����� ������ �� ������� �����: ���������� �� �����
 * ������� �� ������ ����� �� � ����� �� ����� �� ���������� �
 * ���������� ������� �� ���������� ������� �� ������ �����.
 * �� �� ������ ��������� �����.
 */
require_once 'Readline.php';

$someIntegerArray = [ ];

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someIntegerArray [] = ( int ) $inputValue;
	}
} while ( $inputValue != '' );

$newIntegerArray = [ ];

$someIntegerArrayLength = count ( $someIntegerArray );

for($i = 0; $i < $someIntegerArrayLength; $i ++) {
	$sum = 0;
	
	if ($i > 0) {
		$sum += $someIntegerArray [$i - 1];
	}
	
	if ($i < $someIntegerArrayLength - 1) {
		$sum += $someIntegerArray [$i + 1];
	}
	
	$newIntegerArray [] = $sum;
}

print_r ( $newIntegerArray );