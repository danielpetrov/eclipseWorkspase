<?php
/*
 * Въведете 2 различни числа от конзолата и ги разпечатайте в
 * нарастващ ред.
 */
require_once 'Readline.php';

Print "Please enter numbers for a and b " . PHP_EOL;

$a = ( float ) readline ( "Enter a:" . PHP_EOL );

$b = ( float ) readline ( "Enter b:" . PHP_EOL );

if ($a > $b) {
	printf ( "b: %u \na: %u", $b, $a );
} else {
	printf ( "a: %u \nb: %u", $a, $b );
}
