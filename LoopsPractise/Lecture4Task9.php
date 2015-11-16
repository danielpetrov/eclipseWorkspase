<?php
/* * Task8. Task9. Modify task 8 to print a triangle tht is hollow and has only a frame of stars. */
require_once 'Readline.php';
$number = ( int ) readline ( "Enter a number" );
$baseLenfth = $number * 2 - 1;
$startingDot = $number - 1;
$endingDot = $number - 1;
for ($i = 0; $i <= $number; $i++) {
	for ($j = 0; $j < $baseLenfth; $j++) {
		
		if (($j >= $startingDot) && ($j <= $endingDot)) {
			echo "*";
			$startingDot--;
			$endingDot++;
		}
	}
	echo PHP_EOL;
}