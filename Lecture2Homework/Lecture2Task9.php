<?php
/*
 * �� �� ������� ��������, �����
 * ������� �� �������
 * 2 ����������
 * ���������� ����� a,b.
 * ���������� �� ������ ��������� ���� ���������� ����� ��
 * �������������� �� ����� ����� � �����, ����� � ������ �����.
 * ������ �����: a,b - ���������� ����� �� ��������� [10..99].
 * ������: 15, 25
 * �����: 375, 5 �������
 */
require_once 'Readline.php';

$a = ( int ) readline ( "Please enter a in Range [10..99]: " . PHP_EOL );
$b = ( int ) readline ( "Please enter b in Range [10..99]: " . PHP_EOL );

$product = ( string ) ($a * $b);
$lastNumberPossition = 2;

if ($product > 999) {
	$lastNumberPossition = 3;
}

echo $product . ", " . $product [$lastNumberPossition] . " ";

if (! (( int ) $product % 2)) {
	echo "�����";
} else {
	echo "�������";
}
