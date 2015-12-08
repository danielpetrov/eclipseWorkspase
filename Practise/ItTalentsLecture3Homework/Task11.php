<?php
/* ������ 11:
�������� ����� N, ���� ��� ����� � ��������� ����
�������� ������� ���������� � ��������
N
:
*
***
*****
.................
�a�� ������������ ���������� � ����������� �����
����������, �� ����������. */

require_once 'Readline.php';

$height = ( int ) readline ( "Enter a height for the triangle: " );

$baseLenfth = $height * 2 - 1;

$startingPossitionOfDots = $height;
$endingPossitionOfDots = $height;

for ($i = 0; $i < $height; $i++) {
	for ($j = 1; $j <= $baseLenfth; $j++) {

		if (($j >= $startingPossitionOfDots) && ($j <= $endingPossitionOfDots)) {
			//($j == $startingPossitionOfDots) || ($j == $endingPossitionOfDots) || $i == $height - 1) 
			//- for the extra task
			echo "*";
		} else {
			echo " ";
		}
	}
	
	$startingPossitionOfDots--;
	$endingPossitionOfDots++;
	echo PHP_EOL;
}
