<?php
$someArray = [15, 1,2,3,5,3,6,11,4, 15,23];

print_r($someArray);

quickSort($someArray, 0, count($someArray) - 1);

print_r($someArray);

function quickSort(&$array, $low, $high){
	if ($low < $high) {
		$p = partition($array, $low, $high);
		
		quickSort($array, $low, $p - 1);
		quickSort($array, $p + 1, $high);
	}
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