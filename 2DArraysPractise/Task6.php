<?php
$multyStringArray = [
		['1','2','3'],
		['4','5','6'],
		['7','8','9'],
];

$columnIndexToPrint = 0;
foreach ($multyStringArray as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		if ($columnIndexToPrint == $colIndex) {
			echo $multyStringArray[$rowIndex][$columnIndexToPrint] . PHP_EOL;
		}
	}
	
	$columnIndexToPrint++;
}
