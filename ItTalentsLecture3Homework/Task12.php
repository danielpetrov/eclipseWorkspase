<?php
/*
 * ������12:
 * �� �� ������� ��������, ����� ������� ������
 * ���������� ���������� �����, ����� ����� ������� ����� �.�.
 * 100,101,606 � �.�.�� �� ��������.
 */
for($firstDigit = 1; $firstDigit <= 9; $firstDigit ++) {
	for($secondDigit = 0; $secondDigit <= 9; $secondDigit ++) {
		for($thirdDigit = 0; $thirdDigit <= 9; $thirdDigit ++) {
			if ($firstDigit != $secondDigit && $secondDigit != $thirdDigit && 
					$firstDigit != $thirdDigit) {
				echo $firstDigit . $secondDigit . $thirdDigit . PHP_EOL;
			}
		}
	}
}