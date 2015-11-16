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

$areSumsEqual = false;
if (array_sum($firstArray) == array_sum($secondArray)) {
	$areSumsEqual = true;
	echo "They are equal";
}
