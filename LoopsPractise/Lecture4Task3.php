<?php
/*
 * Task3. Write a program that prints all numbers from A to B that can be divided by 3. A and B - from
 * operator from console. Numbers must be in ascending order.
 */
require_once 'Readline.php';

$a = ( int ) readline ( "Please enter a: " . PHP_EOL );
$b = ( int ) readline ( "Please enter b: " . PHP_EOL );

for($i = $a; $i < $b; $i ++) {
	if (! ($i % 3)) {
		echo $i . " ";
	}
}
