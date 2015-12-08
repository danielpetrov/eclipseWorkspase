<?php
/* ������ 5:
�� �� ������� ��������, ��� ����� ������������� �� ��������
���������� ����� � �������� ����� 4*4 ��������.
���������� �� ������� �������� �� ���������� ����� � �������������
�� ���-�������� ���� �� ������ ������ ���-�������� ���� �� ������.
������:
1,2,3,4
5,6,7,8
9,10,11,12
13,14,15,16 */

define("PHP_INT_MIN" , 0 - PHP_INT_MAX);

$arrayMulty = [
		[1, 2, 3, 4],
		[5, 6, 7, 8],
		[9, 10, 11, 12],
		[13, 14, 15, 16],
];

$maxRowSum = maxRowSum($arrayMulty);

$maxColSum = maxColumnSum($arrayMulty);

echo "���-�������� ���� �� ������ � $maxRowSum" . PHP_EOL;

echo "���-������ ���� �� ������ � $maxColSum" . PHP_EOL;

echo "������������ ���� �� ������ � ";
echo $maxRowSum > $maxColSum ? '>' : '<';
echo " �� ������������ ���� �� ������";
		
function maxRowSum(&$array){
	
	$maxSum = PHP_INT_MIN;
	
	foreach ($array as $rowIndex => $row) {
		
		$currentSum = 0;
		
		foreach ($row as $colIndex => $col){
			$currentSum += $col;
		}
		
		if ($currentSum > $maxSum) {
			$maxSum = $currentSum;
		}
	}
	
	return $maxSum;
}

function maxColumnSum(&$array, $maxSum = PHP_INT_MIN, $colIndex = 0){
	
	if ($colIndex == count($array)) {
		return $maxSum;
	}
	
	$columnSum = 0;
	
	for ($rowIndex = 0; $rowIndex < count($array); $rowIndex++) {
		$columnSum += $array[$rowIndex][$colIndex];
	}
	
	if($columnSum > $maxSum){
		$maxSum = $columnSum;
	}
	
	return maxColumnSum($array, $maxSum, $colIndex + 1);
}