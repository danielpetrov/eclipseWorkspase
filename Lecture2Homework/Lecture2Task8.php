<?php
/*
 * �� �� ������� ��������, ����� �������� �� ��������� 4-������o
 * ���������� ����� �� ��������� [1000.. 9999]. �� ���� ����� ��
 * �������� 2 ���� 2-������� �����. ������� ����� �� ������� �� 1-��
 * � 4-�� ����� �� ���������� �����. ������� ����� �� ������� �� 2-�a -
 * 3-�� ����� �� ���������� �����. ���� �������� �� �� ������ ���� 1-��
 * ���� ����� e ��-����� <, ����� = ��� ��-������ �� 2-�� �����.
 * ������: 3332 �����: ��-����� (32<33)
 * ������: 1144 �����: ����� (14=14)
 * ������: 9875 �����: ��-������ (95>87)
 */
require_once 'Readline.php';

$fourDigitNumber = readline ( "Please enter four digit number : " . PHP_EOL );

$firstAndFourthDigit = ( int ) $fourDigitNumber [0] . $fourDigitNumber [3];
$secondAndThirdDigit = ( int ) $fourDigitNumber [1] . $fourDigitNumber [2];

if (( int ) $firstAndFourthDigit > ( int ) $secondAndThirdDigit) {
	echo $firstAndFourthDigit . " > " . $secondAndThirdDigit;
} else if (( int ) $firstAndFourthDigit == ( int ) $secondAndThirdDigit) {
	echo $firstAndFourthDigit . " = " . $secondAndThirdDigit;
} else {
	echo $firstAndFourthDigit . " < " . $secondAndThirdDigit;
}
