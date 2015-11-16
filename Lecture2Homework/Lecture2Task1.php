<?php
/*
 * Да се поиска от потребителя да въведе 3 числа A, В и С (може да са с
 * плаваща запетая) от конзолата.
 * Да се изведе подходящо съобщение за това дали C е между A и B
 */
require_once 'Readline.php';

Print "Please enter numbers for a, b and c" . PHP_EOL;

$a = ( float ) readline ( "Enter a:" . PHP_EOL );

$b = ( float ) readline ( "Enter b:" . PHP_EOL );

$c = ( float ) readline ( "Enter c:" . PHP_EOL );

if (($a < $c) && ($c < $b)) {
	echo "The number " . $c . " is between the numbers " . $a . " and " . $b . PHP_EOL;
} else {
	echo "The number " . $c . " is not between the numbers " . $a . " and " . $b . PHP_EOL;
}
