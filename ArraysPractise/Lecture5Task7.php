<?php

$someIntegerArray = [5, 3, 2];
$someIntegerArrayLength = count($someIntegerArray);

$reversedCopyOfArray = [];
$counter = 0;

for ($i = $someIntegerArrayLength - 1; $i >= 0; $i--) {

	$reversedCopyOfArray[$counter++] = $someIntegerArray[$i];
	
}

foreach ($reversedCopyOfArray as $value) {
	echo $value . PHP_EOL;
}