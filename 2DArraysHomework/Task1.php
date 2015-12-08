<?php
/* ������ 1:
����� �������� ����� 6�5 �� ���������� �����,�����
��������� ���������� �������������.
�� �� ������� ��������, ���� ����� �� �������� ���������� �� ������
� ���-������� � ���-�������� ��������*/

define("PHP_INT_MIN" , 0 - PHP_INT_MAX);

$multyArray = array(
		array(15,2,3),
		array(3,4,5),
		array(6,7,8),
); 

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

foreach ($multyArray as $rowIndex => $rowAsArray) {
	foreach ($rowAsArray as $colIndex => $column) {
		if ($column < $min) {
			$min = $column;
		}
		if ($column > $max){
			$max = $column;
		}
	};
}

echo "Min -- > $min Max --> $max";