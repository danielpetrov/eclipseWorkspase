<?php
/* Задача 1:
Имате двумерен масив 6х5 от естествени числа,чийто
стойности савъведени предварително.
Да се състави програма, чрез която се извеждат елементите от масива
с най-малката и най-голямата стойност*/

define("PHP_INT_MIN" , 0 - PHP_INT_MAX);

$multyArray = array(
		array(15,2,3),
		array(3,4,5),
		array(6,7,8),
); 

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

foreach ($multyArray as $rowIndex => $rowAsArray) {
	foreach ($rowAsArray as $colIndex => $column) {
		if ($column < $min) {
			$min = $column;
		}
		if ($column > $max){
			$max = $column;
		}
	};
}

echo "Min -- > $min Max --> $max";