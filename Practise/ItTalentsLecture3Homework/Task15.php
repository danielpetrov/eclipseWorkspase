<?php
/*
 * ������ 15:
 * �� �� ������� ��������, ����� �� ������� ������ �� ������
 * ����� �� 1 �� �������� ����� N.
 * ������: 5
 * �����: 15
 * ����������� ����� do-while.
 */
require_once 'Readline.php';

$finalNumber = ( int ) readline ( "Enter finalNumber:" . PHP_EOL );

$sum = 0;

$firstNumber = 1;

$currentNumber = $firstNumber;

do {
	$sum += $currentNumber;
	
	$currentNumber ++;
} while ( ! ($currentNumber > $finalNumber) );

echo $sum;