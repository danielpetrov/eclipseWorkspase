<?php
/*
 * ������ 12:
 * �� �� ������� ��������, ���� ����� �� ������������� �������� 7
 * ����� � ��������� ����� �� �������� ������� �� �������� � �������:
 * - 0 � 1 ���� ����� ����������;
 * - 2 � 3 ���� ��������;
 * - 4 � 5 ���� ���������
 */
require_once 'Readline.php';

$someIntegerArray = [];

for( $i = 0; $i < 7; $i++ ) {
	$someIntegerArray[] = (int) readline("Enter next element for array");
}

$exchanger = $someIntegerArray[0];
$someIntegerArray[0] = $someIntegerArray[1];
$someIntegerArray[1] = $exchanger;

$someIntegerArray[2] = $someIntegerArray[2] + $someIntegerArray[3];
$someIntegerArray[3] = $someIntegerArray[2] - $someIntegerArray[3];
$someIntegerArray[2] = $someIntegerArray[2] - $someIntegerArray[3];

$someIntegerArray[4] = $someIntegerArray[4] * $someIntegerArray[5];
$someIntegerArray[5] = $someIntegerArray[4] / $someIntegerArray[5];
$someIntegerArray[4] = $someIntegerArray[4] / $someIntegerArray[5];

print_r($someIntegerArray);