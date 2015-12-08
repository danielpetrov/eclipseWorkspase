<?php
/* Задача 8:
Да се състави програма, чрез която се въвежда ред от символи
(стринг, низ).
Програмата да изведе на екрана дали въведения стринг е палиндром,
т.е. дали четен отляво-надясно и отдясно-наляво е един и същ.
Вход: капак
Изход: да.
Вход: тенджера
Изход: не */
require_once 'Readline.php';

$string = readline ( "Enter string: " . PHP_EOL );

echo isPalindrom($string, 0) ? "да" : "не";

function isPalindrom($string, $counter = 0){
	if ($counter > strlen($string) / 2) {
		return true;
	}
	
	if ( strcmp( $string[$counter], $string[ strlen($string) - $counter - 1 ] ) ) {
		return false;
	}
	
	return isPalindrom($string, $counter + 1);
}

