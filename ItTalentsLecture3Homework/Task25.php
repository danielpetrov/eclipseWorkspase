<?php
/*
 * ������ 25:
 * �� �� ������� ��������, ����� �� ������ ����� N,�� ���������
 * N!,�.�. 1*2*3*4...*N.
 * ������: 5
 * �����: 120
 * ����������� ����� do-while.
 */
require_once 'Readline.php';

$endingNumber = ( int ) readline ( "Enter number:" . PHP_EOL );

$currentNumber = 1;

$allCombinations = 1;

do {
	$allCombinations *= $currentNumber++;
} while ( $currentNumber <= $endingNumber );

echo $allCombinations;