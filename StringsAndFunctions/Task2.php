<?php
/* ������ 2:
 �� �� ������� ��������, ���� ����� �� ������������ �� ��������
 �������������� ��� ���� � ������� 10-20 �����.
 ���������� �� ������� ������� �� 5 ����� � �� ������ ��������� ��
 ��-�������, ����� � ������ �� ����������.
 ������: uchilishe uchenik
 �����: 9 uchenishe */
require_once 'Readline.php';

$firstString = readline ( "Enter string min 10, max 20 symbols: " . PHP_EOL );
$secondString = readline ( "Enter string min 10 max symbols: " . PHP_EOL );

echo "longer - > ", strlen($firstString) > strlen($secondString) ? strlen($firstString) : strlen($secondString), PHP_EOL;

for ($i = 0; $i < 5; $i++) {
	$exchanger = $firstString[$i];
	$firstString[$i] = $secondString[$i];
	$secondString[$i] = $exchanger;
}

echo $firstString . PHP_EOL;

echo $secondString . PHP_EOL;