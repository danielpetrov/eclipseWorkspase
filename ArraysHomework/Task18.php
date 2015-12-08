<?php
/* ������ 18:
������ �� ��� ��������� ������ � ���������� �����.
�� �� ������� ��������, ����� �������� ������ ����� � �������
������� �� ����� ������ � ������� � ����� �����, ��-�������� ��
����� �����.
�� �� ������ ������������ � �� ����� ������
������:
18,19,32,1,3, 4, 5, 6, 7, 8
1, 2, 3,4,5,16,17,18,27,11
�����:
18,19,32 ,4,5,16,17,18,27,11 */

$firstArray = [18,19,32,1,3, 4, 5, 6, 7, 8];
$secondArray = [1,2,3,4,5,16,17,18,27,11];
$arrayWithBiggerNumbers = [];

/* //this will work for associative arrays or non-consistent number indexes, but it is with O(n^2) 
foreach ($array_expression1 as $key1 => $value1) {
	foreach ($array_expression2 as $key2 => $value2) {
		if ($key1 === $key2) {
			;
		};
	};
} */

$firstArrayLength = count( $firstArray );
$secondArrayLength = count($secondArray );

$smallerCount = $firstArrayLength > $secondArrayLength ? $firstArrayLength : $secondArrayLength;

for ($i = 0; $i < $smallerCount; $i++) {
	$arrayWithBiggerNumbers[] = $firstArray[$i] > $secondArray[$i] ? $firstArray[$i] : $secondArray[$i];
}

echo implode(', ', $arrayWithBiggerNumbers);