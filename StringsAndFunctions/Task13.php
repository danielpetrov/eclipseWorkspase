<?php
/* ������ 13:
�� �� ������� �����, ����� ������ ��� ������ �� ����� � �����
�����, �������� ������ �������� �� ���������� ������, ���� �
������� ���� �� ������ �� ���������� �� ������ ������� �����,
� ��� ������� ���� � ���� �� ������ ������� �����. */

function mergeArrays($array1, $array2){
	$result = [];
	
	foreach ($array1 as $value) {
		$result[] = $value;
	}
	
	foreach ($array2 as $value) {
		$result[] = $value;
	}
	
	return $result;
}
