<?php
/* * Task8. Write a program that reads a number and prints a triangle of stars with the height of
* the number. */
require_once 'Readline.php';
$number = ( int ) readline ( "Enter a number" );

for ($i = 0; $i <= $number; $i++) {
	for ($j = 0; $j < $number * 2; $j++) {
		echo "*";
	}
	echo PHP_EOL;
}