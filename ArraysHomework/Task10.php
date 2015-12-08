<?php
/* ������ 10:
�� �� ������� ��������, ���� ����� �� �������� 7 ���� ����� �
��������� �����.
���������� �� ������ �������, ����� � ���-������ �� ��������
�������� �� ���������� �����.
������: 1,2,3,4,5,6,7
�����: ������ �������� 4, ���-������ �������� 4 */

require_once 'Readline.php';

$someIntegerArray = [];
$sum = 0;

for ($i = 0; $i < 7; $i++) {
	$someIntegerArray[] = $nextIntegerValue = (int) readline("Enter next element of the array: ");
	$sum += $nextIntegerValue;
}

$average = $sum / 7;
$minDifference = PHP_INT_MAX;

foreach($someIntegerArray as $number){
	$difference = abs($number - $average);
	if ($difference < $minDifference) {
		$minDifference = $difference;
		$closestNumberToAverage = $number;
	}
}
echo "Average value is $average" . PHP_EOL;

echo "Closest number to average is $closestNumberToAverage";