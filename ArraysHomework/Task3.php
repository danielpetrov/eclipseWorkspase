<?php
/* ������ 3:
�� �� ������ �����, ���� ����� �� �� ������� ����� � 10
�������� �� ������� �����:
������� 2 �������� �� ������ �� ���������� �����.
����� ������� ������� �� ������ � ����� �� ����� ��
���������� 2 �������� � ������. */

require_once 'Readline.php';

define("FibionacciLength", 10);

$inputNumber = (int) readline("Enter number: ");

$arrayIndex = 0;
$almostFibionacciArray[$arrayIndex++] = $inputNumber;
$almostFibionacciArray[$arrayIndex++] = $inputNumber;

do{
	$almostFibionacciArray[$arrayIndex] = 
		$almostFibionacciArray[$arrayIndex - 2] + $almostFibionacciArray[$arrayIndex - 1];
} while(++$arrayIndex < FibionacciLength);

print_r($almostFibionacciArray);