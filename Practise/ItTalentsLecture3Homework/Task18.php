<?php
/*
 * ������ 18:
 * �� �� ������� ��������, ���� ����� �� ������� ��� ����� �� ��������� [1..9].
 * ���������� �� ������� ��������� �� ���������.
 * ������������ �������� �� ����������� � ���������� �� 2-�� �����.
 * ������: 2 2
 * �����:
 * 1*1= 1;
 * 1*2= 2;
 * 2*1= 2;
 * 2*2= 4;
 */
require_once 'Readline.php';

$firstMaxMultiplier = ( int ) readline ( "Enter firstMaxMultiplier in Range[0..9]:" . PHP_EOL );
$secondMaxMultiplier = ( int ) readline ( "Enter secondMaxMultiplier in Range[0..9]:" . PHP_EOL );

for($i = 1; $i <= $firstMaxMultiplier; $i ++) {
	for($j = 1; $j <= $secondMaxMultiplier; $j ++) {
		echo $i . "*" . $j . "= " . $i * $j . PHP_EOL;
	}
}