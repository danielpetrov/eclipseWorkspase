<?php
/* Задача 4:
Имате предварително въведени стойности на елементи в двумерен
масив - естествени числа.
Да се състави програма, чрез която се извеждат стойностите на
елементите в двумерен масив след обръщането му на +90 градуса.
Пример:
1,2,3,4
5,6,7,8
9,10,11,12
13,14,15,16
Изход
13,9,5,1
14,10,6,2
15,11,7,3
16,12,8,4 */

$arrayMulty = [
		[1, 2, 3, 4],
		[5, 6, 7, 8],
		[9, 10, 11, 12],
		[13, 14, 15, 16],
];

// array[i] [j] -> [] j[length - 1 - i]
// array[i] [j] ->  

$rotatedMultyArray = [];

$arrayLength = count($arrayMulty);

for ($j = $arrayLength - 1; $j >= 0; $j--) {
	for ($i = 0; $i < $arrayLength; $i++) {
		$rotatedMultyArray[$i][$j] = $arrayMulty[$arrayLength - 1 - $j][$i];
	}
}

//ksort($rotatedMultyArray);
for ($i = 0; $i < $arrayLength; $i++) {
	for ($j = 0; $j < $arrayLength; $j++) {
		echo $rotatedMultyArray[$i][$j] . " ";
	}
	echo PHP_EOL;
}