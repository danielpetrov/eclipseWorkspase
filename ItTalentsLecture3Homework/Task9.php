<?php
/* 9:�� �� �������� 2 ����� �� ������������ � � �.
�� �� ������� ������ ����� �� � �� � �� ������ 2(��������� �
�������).��� ����� ����� � ������ �� 3, �� �� ������ ��������� ��
������� �� �������� �skip 3�.��� ������ �� ������ �������� ����� (���
������������) ����� ��-������ �� 200, �� �� �������� �����������. */

require_once 'Readline.php';

$firstNumber = ( int ) readline ( "Enter firstNumber:" . PHP_EOL );

$lastNumber = ( int ) readline ( "Enter lastNumber:" . PHP_EOL );

$sumOfAllPowers = 0;

for ($i = $firstNumber; $i < $lastNumber; $i++) {
	$currentPower = $i * $i;
	
	if (!($currentPower % 3)) {
		echo "skip " . $i . " ";;
	} else {
		echo $currentPower . " ";
		
		$sumOfAllPowers += $currentPower;
		
		if ($sumOfAllPowers > 200) {
			break;
		}
	}
	
}