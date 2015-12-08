<?php
/* Задача 1:
Да се състави програма, която сортира по метода на мехурчето
предварително въведен двумерен масив с естествени числа.
Сортирането да се извърши по редове/колони.
Пример:
15; 16; 8; 1;
2; 3; 4; 7;
9; 11; 19; 6;
Изход:
1; 2; 3; 4;
6; 7; 8; 9;
11; 15; 16; 19 */
require_once 'NonNativeFunctons.php';

$someArray = [
		[15,16,8,1],
		[2,3,4,7],
		[9,11,19,6]
];

$arrayLength = count_multy($someArray);
$arrayRowsCount = count($someArray);

for ($i = 0; $i < $arrayLength; $i++) {
	foreach ($someArray as $rowIndex => $row) {
		$rowLength = count($row);
		foreach ($row as $colIndex => $col) {
			if ($colIndex + 1 < $rowLength) {
				if ($someArray[$rowIndex][$colIndex] > $someArray[$rowIndex][$colIndex + 1]) {
					swap($someArray, $rowIndex, $colIndex, $rowIndex, $colIndex + 1);
				}
			} else {
				if ($rowIndex + 1 < $arrayRowsCount) {
					if ($someArray[$rowIndex][$colIndex] > $someArray[$rowIndex  + 1][0]) {
						swap($someArray, $rowIndex, $colIndex, $rowIndex  + 1 , 0);
					}
				}
			}
			
		}
	}
}

function swap(&$array, $row1, $col1, $row2, $col2) {
	$swapy = $array [$row1][$col1];
	$array [$row1][$col1] = $array [$row2][$col2];
	$array [$row2][$col2] = $swapy;
}
print_r ( $someArray ) . PHP_EOL;