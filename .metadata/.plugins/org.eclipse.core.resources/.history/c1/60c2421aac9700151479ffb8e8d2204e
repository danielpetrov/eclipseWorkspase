<?php
/* Задача 5:
Да се реши горната задача като се създаде рекурсивна функция, която
да връща търсения масив като резултат */
$array = [1,3,5,7,8,11,45];
$n = 6;
insertInPlace($array, 0, $n);
print_r($array);
function insertInPlace(&$array, $current, $n){
	if ($current == count($array)) {
		array_push($array, $n);
		return;
	} else if($n < $array[$current]) {
		array_splice($array, $current, 0 , $n);
		return;
	}
	
	insertInPlace($array, $current + 1, $n);
}