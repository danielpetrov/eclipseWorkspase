<?php
/*
 * ������ 13:
 * �� �� ������� ��������, ����� ������� ������
 * ���������� ���������� �����, ����� ���� ���� �� ������� �����
 * �� ������ �����.
 */
require_once 'Readline.php';

$sum = ( int ) readline ( "Enter sum in Range[ 2>=sum<=27 ]:" . PHP_EOL );

for($firstDigit = 1; $firstDigit <= 9; $firstDigit ++) {
	for($secondDigit = 0; $secondDigit <= 9; $secondDigit ++) {
		for($thirdDigit = 0; $thirdDigit <= 9; $thirdDigit ++) {
			if ($firstDigit + $secondDigit + $thirdDigit == $sum) {
				echo $firstDigit . $secondDigit . $thirdDigit . PHP_EOL;
			}
		}
	}
}