<?php
/* ������ 7:
�� �� ������� ��������, ����� ���� ����� �� ���� ��������� �
��������.
���� �������� �� �� �������� ���� �� ���������� ����, ����� � ����
����� � ���-������� ����.
������: asd fg hjkl
�����: 3 ����, ���-������� � � 4 �������. */

require_once 'Readline.php';

$array = explode(" ", readline ( "Enter sentance: " . PHP_EOL ));
$longestLength = strlen($array[0]);

foreach ($array as $value) {
	if (strlen($value) > $longestLength) {
		$longestLength = strlen($value);
	}
}

echo count($array), " ����, ���-������� � � $longestLength �������.";
