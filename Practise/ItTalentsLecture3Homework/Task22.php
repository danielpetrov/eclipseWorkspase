<?php
/*
 * ������ 22:
 * �� �� ������� ��������, ����� ������� ������� 10 ���-�����
 * �����, ����� �� ����� �� 2, 3 ��� �� 5 � ����� �� ��-������ ��
 * �������� ���������� �����.
 * ������� �� ��������, ������ � ������ ������� �����.
 * ������ �����: ����� �� ��������� [1..999]
 * ������: 1
 * �����: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
 * ����������� ����� while.
 */
require_once 'Readline.php';

$startingIndex = ( int ) readline ( "Enter number in Range[1..999]:" . PHP_EOL );

$counterToTen = 1;

$currentNumber = $startingIndex;

while ( $counterToTen <= 10 ) {
	
	if (! ($currentNumber % 2) || ! ($currentNumber % 3) || ! ($currentNumber % 5)) {
		echo $counterToTen++ . ":" . $currentNumber . PHP_EOL;
	}
	
	if (++$currentNumber > 999) {
		break;
	}
}


