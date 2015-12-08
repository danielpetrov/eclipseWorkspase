<?php
$array = [
		[1, 2, 3, 4],
		[6, 7, 8, 9],
		[11,15,16,19]
		
];

//we asume that all rows have the same length, otherwise we shoud count them everytime, 
//which will be slow
$allRowsCount = count($array);
$colLength = count($array[0]);

$needle = 15;

$foundCoords = binarySearchInMulty($needle, $array, [0,0], [$allRowsCount - 1, $colLength - 1], $allRowsCount, $colLength);

echo "The element $needle is on row [$foundCoords[0]] and column [$foundCoords[1]]";

function binarySearchInMulty($needle, $haystack, $start, $end, $allRowsCount, $colLength){
	if ($start[0] >= $end[0] && $start[1] > $end[1]) {
		return -1;
	}
	
	$middle = findMiddle($haystack, $start, $end, $colLength);
	
	if ($haystack[$middle[0]][$middle[1]] > $needle) {
		return binarySearchInMulty($needle, $haystack, $start, decreaseMiddle($middle, $colLength), $allRowsCount, $colLength);
	} else if($haystack[$middle[0]][$middle[1]] < $needle) {
		return binarySearchInMulty($needle, $haystack, increaseMiddle($middle, $allRowsCount, $colLength), $end, $allRowsCount, $colLength);
	} else {
		return $middle;
	}
}

function increaseMiddle($middle, $allRowsCount, $colLength){
	if ($middle[1] < $colLength - 1) {
		$middle[1]++;
	} else if($middle[0] < $allRowsCount - 1) {
		$middle[0]++;
		$middle[1] = 0;
	}
	return $middle;
}

function decreaseMiddle($middle, $colLength){
	if ($middle[1] > 0) {
		$middle[1]--;
	} else if($middle[0] > 0) {
		$middle[0]--;
		$middle[1] = $colLength - 1;
	}
	return $middle;
}

function findMiddle($array, $start, $end, $colLength){
	$startPoss = ($colLength * $start[0]) + ($start[1] + 1);
	$endPoss = ($colLength * $end[0]) + ($end[1] + 1);
	
	$middlePoss = (int)(($startPoss + $endPoss) / 2);
	if ($middlePoss > $colLength) {
		$middle[0] = floor(($middlePoss - 1) / $colLength);
		$middle[1] = ($middlePoss - 1) % $colLength;
	} else {
		$middle[0] = 0;
		$middle[1] = $middlePoss - 1;
	}
	
	return $middle;
}