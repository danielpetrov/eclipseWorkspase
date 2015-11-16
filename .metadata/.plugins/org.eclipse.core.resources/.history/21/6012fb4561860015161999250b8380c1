<?php
$multyArray = array(
		array(15,2,3),
		array(3,4,5),
		array(6,7,8),
);

$columnIndexToSum = 0;
$sumOfElementsInDiagonal = 0;

foreach ($multyArray as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		if ($columnIndexToSum == $colIndex) {
			$sumOfElementsInDiagonal += $multyArray[$rowIndex][$columnIndexToSum];
		}
	}
	
	$columnIndexToSum++;
}

echo $sumOfElementsInDiagonal;