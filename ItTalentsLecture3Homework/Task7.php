<?php
/* ������ 7: ���������� �� 3, �� �� ������� �� ������ ������� 
n ����� ����� �� ����� �� 3. ������� �� �� ��������� ��� ������� */
require_once 'Readline.php';

$firstNNumbers = ( int ) readline ( "Enter firstNNumbers:" . PHP_EOL );

$lastIndex = $firstNNumbers * 3;

for ($i = 3; $i <= $lastIndex ; $i+= 3) {
	echo $i . " ";
}