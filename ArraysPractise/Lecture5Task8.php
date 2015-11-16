<?php
require_once 'Readline.php';

$someArray = [ ];
$key = 0;

/*
 * $secondArray = [];
 * $secondArrayKey = 0;
 */

while ( 1 ) {
	
	$nextValue = readline ( 'Enter value for $someArray[' . $key . ']: ' );
	
	if ($nextValue == "") {
		break;
	}
	
	if (! ($nextValue % 2)) {
		$nextValue *= 2;
	} else {
		$nextValue /= 2;
	}
	
	$someArray [$key ++] = $nextValue;
}

foreach ( $someArray as $key => $value ) {
	
	echo "\$someArray[" . $key . "]= " . $value, PHP_EOL;
}