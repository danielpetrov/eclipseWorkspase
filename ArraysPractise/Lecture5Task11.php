<?php
require_once 'Readline.php';

$firstArray = [ ];
$secondArray = [];

$key = 0;

while ( 1 ) {

	$nextValue = readline ( 'Enter value for $firstArray[' . $key . ']: ' );

	if ($nextValue == "") {
		break;
	}

	$firstArray [$key ++] = $nextValue;
}

$key = 0;
while ( 1 ) {

	$nextValue = readline ( 'Enter value for $secondArray[' . $key . ']: ' );

	if ($nextValue == "") {
		break;
	}

	$secondArray [$key ++] = $nextValue;
}

$mergedArray = array_merge($firstArray, $secondArray);
$fiveMaximumNumbers = [];

for ($i = 0; $i < 5; $i++) {
	$maxValue = max($mergedArray);
	$fiveMaximumNumbers[] = $maxValue;
	unset($mergedArray[array_search($maxValue, $mergedArray)]);
}

foreach ( $fiveMaximumNumbers as $key => $value ) {

	echo "\$fiveMaximumNumbers[" . $key . "]= " . $value, PHP_EOL;
}