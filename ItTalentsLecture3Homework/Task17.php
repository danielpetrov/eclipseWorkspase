<?php
/*
 * ������ 17:
 * �� �� ������� ��������, ����� ������� �������, ����� ������ ��
 * �������� ��� ����� *, � ������������ � ��������� ��� ������� ����.
 * ������ ����� b - ������� �� �������� ����� �� ���������
 * [3..20], c - ����� ����.
 * ���������� �� �������� ����� for.
 */
require_once 'Readline.php';

$sideA = ( int ) readline ( "Enter sideA in Range[3..20]:" . PHP_EOL );
$fillingChar = readline ( "Enter fillingChar:" . PHP_EOL );

for($i = 0; $i < $sideA; $i ++) {
	for($j = 0; $j < $sideA; $j ++) {
		if (($i && $i != $sideA - 1) && ($j && $j != $sideA - 1)) {
			echo $fillingChar;
		} else {
			echo "*";
		}
	}
	
	echo PHP_EOL;
}
