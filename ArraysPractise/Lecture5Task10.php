<?php
require_once 'Readline.php';

$arraySize = readline("Enter aray size: " . PHP_EOL);
$randomGeneratedArray = [];

for ($i = 0; $i < $arraySize; $i++) {
	$randomGeneratedArray[$i] = rand(5, 15);
}

foreach ( $randomGeneratedArray as $key => $value ) {

	echo "\$randomGeneratedArray[" . $key . "]= " . $value, PHP_EOL;
}