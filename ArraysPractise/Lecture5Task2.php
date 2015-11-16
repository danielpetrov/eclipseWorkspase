<?php

$someIntegerArray = [5, 3, 2];

for ($i = 0; $i < 3; $i++) {
	
	echo "Before: \$someIngegerArray[" . $i . "] = " . $someIntegerArray[$i] . PHP_EOL;
	
	$someIntegerArray[$i]++;
	
	echo "After: \$someIngegerArray[" . $i . "] = " . $someIntegerArray[$i] . PHP_EOL; 
}