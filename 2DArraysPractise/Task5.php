<?php

$multyArray = array(
		array(15,2,3),
		array(3,4,5),
		array(6,7,8),
);
$rowSum = 0;
$maxSum = 0;
$maxRowIndex = NULL;

foreach ($multyArray as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		$rowSum += $multyArray[$rowIndex][$colIndex];
	}
	
	if ($rowSum > $maxSum) {
		$maxSum = $rowSum;
		$maxRowIndex = $rowIndex;
	}
	
	$rowSum = 0;
}

var_dump($maxRowIndex);