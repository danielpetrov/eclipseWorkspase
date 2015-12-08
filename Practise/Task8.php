<?php
$multyArray = array(
		array(false,true,false),
		array(false,true,true),
		array(false,true,true),
);
$hasTrueOverTheSecondDiagonal = false;
$columnIndexToPrint = count($multyArray[0]) - 1;
foreach ($multyArray as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		if ($columnIndexToPrint > $colIndex) {
			if ($multyArray[$rowIndex][$colIndex] === true) {
				$hasTrueOverTheSecondDiagonal = true;
			}
		} 
	}
	
	$columnIndexToPrint--;
}
var_dump($hasTrueOverTheSecondDiagonal);