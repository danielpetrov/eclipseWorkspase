<?php
// ������ 5: �� �� ������� �� ����������� 2 �����. � �� �� ������� 
//�� ������ ������ ����� �� ��-������� �� ��-��������.

require_once 'Readline.php';

$firstNumber = ( int ) readline ( "Enter firstNumber:" . PHP_EOL );

$lastNumber = ( int ) readline ( "Enter lastNumber:" . PHP_EOL );

for ($i = $firstNumber; $i <= $lastNumber; $i++) {
	echo $i . " ";
}