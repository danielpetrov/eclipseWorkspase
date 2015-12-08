<?php
/*
 * ������ 13:
 * �� �� ������� ��������, ���� ����� �� ������� ����� � �� ���������
 * ���� ����� � ������� ������ �������.
 * ����������, ���� �����, �� ��������� �������������� ������ �����
 * �� ���������� ���������� ����� � 2-���� ������ �������.
 * ������: 99
 * �����: 1100011
 */

require_once 'Readline.php';

$number = (int) readline("Enter number: " . PHP_EOL);

//echo decbin($number) . PHP_EOL; // for debug

if ($number > 0) {
	$binaryArray = [];
	
	for($i = floor ( log ( $number, 2 ) ); $i >= 0; $i --) {
		$binaryArray [$i] = $number % 2;
		$number = $number / 2;
	}
	
} else {
	$binaryArray[0] = 0;
}

for($i = 0; $i < count ( $binaryArray ); $i ++) {
	echo $binaryArray [$i];
}

//echo PHP_EOL;
//ksort($binaryArray);
//print_r($binaryArray);