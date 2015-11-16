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

$max = 0;
foreach ($someArray as $key => $value) {
	
	if ($value > $max) {
		$max = $value;
	}
	
	echo "\$someArray[" . $key . "]= " . $value, PHP_EOL;
}

echo "Max number = ", $max;

