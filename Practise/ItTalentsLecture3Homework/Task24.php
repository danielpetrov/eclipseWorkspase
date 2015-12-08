<?php
/*
 * ������ 24:
 * ���� ����� X � ���������,a�� �� ���� ������� ������ ����� ������ ������.
 * �� �� ������� ��������, ����� ��������� ���� �������� ����� � ���������.
 * ������ �����:
 * N - ���������� ����� �� ��������� [10 .. 30000].
 * ������: 17571
 * �����: ������� � ���������
 */
require_once 'Readline.php';

$numberFromConsole = ( int ) readline ( "Enter number in Range[10 .. 30000] :" . PHP_EOL );

$number = $numberFromConsole;

$reversedNumber = 0;

while( floor ( $number ) != 0 ) {
	$reversedNumber = $reversedNumber * 10 + $number % 10;
	$number /= 10;
}


if ($numberFromConsole === $reversedNumber) {
	echo "������� � ���������.";
} else{
	echo "������� �� � ���������.";
}
