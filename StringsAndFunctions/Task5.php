<?php
/* ������ 5:
�� �� ������� ��������, ���� ����� �� �������� 2 ������ �� �����
(����).
��� � ����� ������ ������� ���� � ���� ����, �� �� ������ �� ������
������� ������ ������������, � ������� ����������, ���� �� �� ��
�������� � ����� �� ����.
��� �������� ����� ��� ���� �� �� ������ ���� ������������
���������.
������ :
�
�
�����
�
�
� */
// �������� � ������ ������ ���������� �������. ������� ��� ������, � ����� �� ������� ����� ���� ��
// ������, �����. ������ � ��������� �� � ��������, �� ������ �� ����������� ���� ������ ���� ��
// ������ ���.
require_once 'Readline.php';

$firstString = readline ( "Enter string: " . PHP_EOL );
$secondString = readline ( "Enter string: " . PHP_EOL );

$hasCross = false;
$stack = [];
$spacesToShift = 0;

for ($i = 0; $i < strlen($firstString); $i++) {
	array_push($stack, $firstString[$i]);
	if (!$hasCross) {
		for ($j = 0; $j < strlen($secondString); $j++) {
			if (!strcmp($firstString[$i], $secondString[$j]) && !$hasCross) {
				array_pop($stack);
				array_push($stack, $secondString);
				$spacesToShift = $j;
				$hasCross = true;
			}
		}
	}
}

if ($hasCross) {
	foreach ($stack as $key => $value) {
		if (strlen($value) == 1) {
			echo str_repeat(" ", $spacesToShift);
		}
		echo $value, PHP_EOL;
	}
} else {
	echo "�������� ����� ��� ����.";
}
