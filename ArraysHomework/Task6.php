<?php
/*
 * ������ 6:
 * �������� ��������, ����� ����� ���� 2 ������ � ����� �������
 * ��������� ���� �� �������, � ���� �� � ������� ������
 */
require_once 'Readline.php';

$firstArray = [ ];
$secondArray = [ ];

do {
	$inputValue = readline ( "Enter next element for first array: " );
	
	if ($inputValue !== '') {
		$firstArray = $inputValue;
	}
} while ( $inputValue != '' );

do {
	$inputValue = readline ( "Enter next element for second array: " );
	
	if ($inputValue !== '') {
		$secondArray = $inputValue;
	}
} while ( $inputValue != '' );

echo $firstArray === $secondArray ? "�������� �� �������" . PHP_EOL : "�������� �� ��������" . PHP_EOL;

echo count ( $firstArray ) == count ( $secondArray ) ? "�������� �� � ������� �������" : "�������� �� � �������� �������";