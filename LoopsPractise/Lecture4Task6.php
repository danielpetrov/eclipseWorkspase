<?php
require_once 'Readline.php';
$number = ( int ) readline ( "Enter a number" );

$counterForBits = 0;

while($number){
	if ($number & 1) {
		$counterForBits++;
	}
	$number = $number >> 1;
}

echo "The number has " . $counterForBits . " ones in its binary representation";