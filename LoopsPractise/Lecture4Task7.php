<?php
/*
 * Task7. Write a program that reads numbers A, B and C. A must be short. B and C must be < 7. The
 * program has to invert the bits from number A on positions B and C. Print the new value of A.
 */
require_once 'Readline.php';
$a = ( int ) readline ( "Enter a number" . PHP_EOL );
$b = ( int ) readline ( "Enter a number in Range[0..6]" . PHP_EOL );
$c = ( int ) readline ( "Enter a number in Range[0..6]" . PHP_EOL );

$numberToBitString = "";
$counter = 0;
while ( $a ) {
	
	if ($a & 1) {
		if ($b == $counter || $c == $counter) {
			$numberToBitString .= "1";
		} else {
			$numberToBitString .= "0"; // reversed
		}
	} else {
		if ($b == $counter || $c == $counter) {
			$numberToBitString .= "0";
		} else {
			$numberToBitString .= "1"; // reversed
		}
	}
	$a = $a >> 1;
	
	$counter ++;
}

echo ( int ) $numberToBitString;
