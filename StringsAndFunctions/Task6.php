<?php
/* ������ 6:
�� �� ������� ��������, ���� �����  �� ������� ��������� � �������
����.
���� �������� �� ������ �� �� ������� ����� �����, �� ����� �������
���� �� ������� � ������ �����, � ���������� � ����� �� �� �����.
������: ����� ����� ������
�����: ����� ����� ������ */

require_once 'Readline.php';

foreach (explode(" ", readline ( "Enter sentance: " . PHP_EOL )) as $value) {
	$array[] = strtoupper($value[0]) . substr($value, 1);
}

echo implode(" ", $array);
