<?php
//������ 6
/* �� �� ������� ����� �� ������(���������) � �� �� 
������ ����� �� ������ ����� ����� 1 � ���������� ����� */

require_once 'Readline.php';

$finalNumber = ( int ) readline ( "Enter finalNumber:" . PHP_EOL );

$sum = 0;

for ($i = 1; $i <= $finalNumber; $i++) {
	$sum += $i;
}

echo $sum;