<?php
/*
 * ������ 20:
 * �� �� ������� ��������, ���� ����� �� ������� ������� ��
 * �����. ������ �� ���������� �� ���������� ��� ��� ����� ��
 * ����� �� 45.
 * ������:
 * 1 2 3 4 5 6 7 8 9 0
 * 2 3 4 5 6 7 8 9 0 1
 * 3 4 5 6 7 8 9 0 1 2
 * 4 5 6 7 8 9 0 1 2 3
 * 5 6 7 8 9 0 1 2 3 4
 * 6 7 8 9 0 1 2 3 4 5
 * 7 8 9 0 1 2 3 4 5 6
 * 8 9 0 1 2 3 4 5 6 7
 * 9 0 1 2 3 4 5 6 7 8
 * 0 1 2 3 4 5 6 7 8 9
 */
$currentRowStartingNumber = 1;
$currentColumnNumber = 1;

for($i = 0; $i < 10; $i ++) {
	for($j = 0; $j < 10; $j ++) {
		echo $currentColumnNumber ++ . " ";
		
		if ($currentColumnNumber == 10) {
			$currentColumnNumber = 0;
		}
	}
	
	if (++ $currentRowStartingNumber == 10) {
		$currentRowStartingNumber = 0;
	}
	
	$currentColumnNumber = $currentRowStartingNumber;
	
	echo PHP_EOL;
}