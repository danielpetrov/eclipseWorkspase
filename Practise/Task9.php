<?php
$multyArray = array(
		array(55,2,3,4,5),
		array(6,7,8,9,10),
		array(11,12,13,14,15),
);

$lastRow = count($multyArray) - 1;

if ($lastRow > 0) {
	$lastColumn = count($multyArray[0]) - 1;
}

$currentSum = 0;
$maxSum;

$maxSubMatrix = [];

$maxRowIndex = 0;
$maxColIndex = 0;

foreach ($multyArray as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		if ($rowIndex < $lastRow && $colIndex < $lastColumn) {
			
			$currentSum = $multyArray[$rowIndex][$colIndex] + $multyArray[$rowIndex + 1][$colIndex] 
			+ $multyArray[$rowIndex][$colIndex  + 1] + $multyArray[$rowIndex + 1][$colIndex + 1];
			
			if (!isset($maxSum) || $currentSum > $maxSum) {
				$maxSum = $currentSum;
				
				$maxColIndex = $colIndex;
				$maxRowIndex = $rowIndex;
			}
		}
	}
}

$maxSubMatrix[0][0] = $multyArray[$maxRowIndex][$maxColIndex];
$maxSubMatrix[0][1] = $multyArray[$maxRowIndex][$maxColIndex + 1];
$maxSubMatrix[1][0] = $multyArray[$maxRowIndex + 1][$maxColIndex];
$maxSubMatrix[1][1] = $multyArray[$maxRowIndex + 1][$maxColIndex + 1];

print_r($maxSubMatrix);