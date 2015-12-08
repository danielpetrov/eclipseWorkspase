<?php
/* Задача 13:
Да се създаде метод, който приема два масива от числа и връща
масив, съдържащ всички елементи на подадените масиви, като в
първата част на масива са елементите на първия подаден масив,
а във втората част – тези на втория подаден масив. */

function mergeArrays($array1, $array2){
	$result = [];
	
	foreach ($array1 as $value) {
		$result[] = $value;
	}
	
	foreach ($array2 as $value) {
		$result[] = $value;
	}
	
	return $result;
}
