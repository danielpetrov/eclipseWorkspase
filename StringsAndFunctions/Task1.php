<?php
/* ������ 1:
�� �� ������� ��������, ���� ����� �� �������� ��� ���� ���������
�� 40 ������ � ����� �����.
���� �������� �� ������ �� �� �������� �������� ���� � ������ � ����
� ����� �����.
������: Abcd Efgh
�����: ABCD abcd EFGH efgh */

require_once 'Readline.php';

$firstString = readline ( "Enter string max 40 symbols: " . PHP_EOL );
$secondString = readline ( "Enter string max 40 symbols: " . PHP_EOL );

echo implode(" ", array(strtolower($firstString), strtoupper($firstString), strtolower($secondString),
		strtoupper($secondString)));