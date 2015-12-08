<?php
/* ������ 16:
�� �� ������� ��������, ���� ����� ������������� �������� 10
������ ����� �� ��������� �� ���������� �� ������� �����:
1. ������� �������������� �����.
2. ������ �������� ��� �������� ��-����� �� -0.231 �� ������� ���
������ �� �������� �� ������� �� + ������� 41.25, � ������ ��������
�������� �� ������� � �������������� ����� ����� ������� �
�������� ������� �����
3. �� �� ������� ���������� �� �������� � ��������������� �����.
4. �� �� ������� �������� �������� �� ������ �������� �� ������
������, ����� �� �������� �� 0.
������: -1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4
�����: 42.25, 45.25, 9.3, 16.8, 0, 38.4, 90.25, 68.8, 81.9,141.25 
//���������� ����� �� � ����, ����� �� ������ � ���������*/

require_once 'NonNativeFunctons.php';

$realNumbers = [-1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4];

$modifiedArray = [];

foreach ($realNumbers as $key => $value) {
	if ($value < -0.231) {
		$modifiedArray[] = pow($key, 2) + 41.25;
	} else {
		$modifiedArray[] = $value * ($key + 1);
	}
}

echo implode(', ', $realNumbers) . PHP_EOL;
echo implode(', ', $modifiedArray) . PHP_EOL;

$average = array_sum($modifiedArray) / 
	(count($modifiedArray) - array_count_values_of(0, $modifiedArray));

echo $average;
