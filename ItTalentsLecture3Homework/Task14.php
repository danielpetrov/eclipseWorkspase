<?php
/*
 * ������ 14: �� �� ������� ��������, ����� �� ��������
 * ���������� ����� N �� ��������� [10..200] ������� � �������
 * ��� ������ �����, ����� �� ������ �� 7 � �� ��-����� �� N.
 */
require_once 'Readline.php';

$number = ( int ) readline ( "Enter number in Range[10..200]:" . PHP_EOL );

$constantToSubstract = 1;

for($i = $number; $i >= 14; $i -= $constantToSubstract) {
	if (! ($i % 7)) {
		echo $i . PHP_EOL;
		$constantToSubstract = 7;
	}
}