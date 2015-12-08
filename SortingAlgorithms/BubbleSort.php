<?php
$someArray = [15, 1,2,3,5,3,6,11,4, 15,23];

$arrayLength = count ( $someArray );

$isSwaped = false;

do {
	$sortedToIndex = 0;
	for($i = 1; $i < $arrayLength; $i ++) {
		
		if ($someArray [$i] < $someArray [$i - 1]) {
			swap ( $someArray, $i, $i - 1 );
			$sortedToIndex = $i;
		}
	}
	$arrayLength = $sortedToIndex;
} while ( $arrayLength != 0 );

function swap(&$array, $index1, $index2) {
	$swapy = $array [$index1];
	$array [$index1] = $array [$index2];
	$array [$index2] = $swapy;
}

print_r ( $someArray );