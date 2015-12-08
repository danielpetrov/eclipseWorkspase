<?php
/* Задача 14:
Да се състави метод, който приема за стойност число N
и връща стойността на N! */

function factoriel($n){
	$result = 1;
	$currentNumber = 1;
	
	do{
		$result *= $currentNumber;
	}while($currentNumber++ < $n);
	
	return $result;
}