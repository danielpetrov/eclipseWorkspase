<?php
/*
 * ������ 16:
 * �� �� ������� ��������, ���� ����� �� �������� 2 ����������
 * ����� N, M �� ��������� [10..5555].
 * ����������, ���� ����� for, �� ������� ������ ����� ��
 * ���������, ����� �� ������ �� 50 � �������� ���.
 * ������: 25,249
 * �����: 200,150,100, 50.
 */
require_once 'Readline.php';

$firstIndex = ( int ) readline ( "Enter firstIndex in Range[10..5555]:" . PHP_EOL );
$lastIndex = ( int ) readline ( "Enter lastIndex in Range[10..5555]:" . PHP_EOL );

$constantToSubstract = 1;
define ( "DividableConstant", 50 );

for($i = $lastIndex; $i >= DividableConstant && $i >= $firstIndex; $i -= $constantToSubstract) {
	if (! ($i % DividableConstant)) {
		echo $i . PHP_EOL;
		
		if ($constantToSubstract < DividableConstant) {
			$constantToSubstract = DividableConstant;
		}
	}
}