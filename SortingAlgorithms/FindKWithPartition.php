<?php
/* ������ 2:
����������� ����������� �� ������ �� �����
(���������) �������� ��������, ����� �� ������ k-��� ���-
����� ������� � �����.
������ :
����� [5, 8, 73, 0, 43, 3424, 78, 98], k = 3
����� : 78
����� [5, 8, 73, 0, 43, 3424, 78, 98], k = 1
����� :  3424 */

$array = [5, 8, 73, 0, 43, 3424, 78, 98];
$k = 1;

echo kMaxElementOfArray($k, 0, count($array) - 1, $array);

function kMaxElementOfArray($needle, $startIndex, $endIndex, $array){
	$pivot = partition($array, $startIndex, $endIndex);
	$k = count($array) - $needle;
	
	if($k < $pivot){
		return kMaxElementOfArray($needle, $startIndex, $pivot - 1, $array);
	} else if($k  > $pivot){
		return kMaxElementOfArray($needle, $pivot + 1, $endIndex, $array);
	} else return $array[$pivot];
	
}

function partition(&$array, $low, $high){
	$pivot = $array[$high];
	$i = $low;
	for ($j = $low; $j < $high; $j++) {
		if ($array[$j] <= $pivot) {
			swap($array, $i, $j);
			$i++;
		}
	}
	
	swap($array, $i, $high);
	
	return $i;
}

function swap(&$array, $index1, $index2) {
	$swapy = $array [$index1];
	$array [$index1] = $array [$index2];
	$array [$index2] = $swapy;
}