<?php
require_once 'Readline.php';

$someArray = [];
$key = 0;

while(1){

	$nextValue = readline('Enter value for $someArray[' . $key . ']: ');

	if ($nextValue == "") {
		break;
	}

	$someArray[$key++] = $nextValue;

}

$modifiedArrayLength = count($someArray) + 1;
$modifiedArray = [];
$modifiedArray[0] = 6;

for ($i = 1; $i < $modifiedArrayLength; $i++) {
	
	$modifiedArray[$i] = $someArray[ $i - 1] * $i ;
}

foreach ($modifiedArray as $key => $value) {

	echo "\$modifiedArray[" . $key . "]= " . $value, PHP_EOL;
}