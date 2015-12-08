<?php

$binaryArray= [0,1,0,1,0,1,1,1,0, 0];

$sortedBinaryArray = [];

foreach ($binaryArray as $bitIndex => $bit) {
	if (!$bit) {
		array_unshift($binaryArray, $bit);
		unset($binaryArray[$bitIndex]);
	} else {
		array_push($binaryArray, $bit);
		unset($binaryArray[$bitIndex]);
	}
}

var_dump($binaryArray);