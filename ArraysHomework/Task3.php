<?php
/* Задача 3:
Да се въведе число, след което да се създаде масив с 10
елемента по следния начин:
Първите 2 елемента на масива са въведеното число.
Всеки следващ елемент на масива е равен на сбора от
предишните 2 елемента в масива. */

require_once 'Readline.php';

define("FibionacciLength", 10);

$inputNumber = (int) readline("Enter number: ");

$arrayIndex = 0;
$almostFibionacciArray[$arrayIndex++] = $inputNumber;
$almostFibionacciArray[$arrayIndex++] = $inputNumber;

do{
	$almostFibionacciArray[$arrayIndex] = 
		$almostFibionacciArray[$arrayIndex - 2] + $almostFibionacciArray[$arrayIndex - 1];
} while(++$arrayIndex < FibionacciLength);

print_r($almostFibionacciArray);