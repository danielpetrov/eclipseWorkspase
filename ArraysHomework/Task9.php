<?php
/*
 * ������9:
 * �������� ��������, � ����� ����������� ������� �����, ���� �����
 * ���������� �� ������ �� ������� � ������� ��� (����� �� � ������ ��
 * �� �������� � ������� ���, ��� ����� �� �� ������, ���� ����� �� ��
 * �������� � �������� ���). ��������� �� ������ �������� ����� � ����
 * ������������ ����� � ����� ��� �� ���������� ���� �����.
 */
require_once 'Readline.php';

$someArray = [];

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someArray [] = $inputValue;
	}
} while ( $inputValue !== '' );

$reversedArray = [];
$someArrayLength = count($someArray);

for ($i = 0; $i < $someArrayLength; $i++) {
	$reversedArray[$someArrayLength - 1 - $i] = $someArray[$i];
}

for ($i = 0; $i < $someArrayLength / 2; $i++) {
		$exchanger = $someArray[$i];
		$someArray[$i] = $someArray[$someArrayLength - 1 - $i];
		$someArray[$someArrayLength - 1 - $i] = $exchanger;
}	

print_r($reversedArray);
print_r($someArray);