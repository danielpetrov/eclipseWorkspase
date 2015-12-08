<?php
$array = array(0,1,2,3,4,5,6,7,8,9);
shuffle($array);
$length = count($array);

for ($i = 0; $i < $length; $i++) {
	$smallest = $array[$i];
	$smallestIndex = $i;
	
	for ($j = $i + 1; $j < $length; $j++) {
		if ($smallest < $array[$j]) {
			$smallest = $array[$j];
			$smallestIndex = $j;
		}
	}
	swap($array, $i, $smallestIndex);
}
print_r ( $array );

function swap(&$array, $index1, $index2) {
	$swapy = $array [$index1];
	$array [$index1] = $array [$index2];
	$array [$index2] = $swapy;
}
