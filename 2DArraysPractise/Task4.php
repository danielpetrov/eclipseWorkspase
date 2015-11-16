<?php

$binaryArray= [0,1,0,1,0,1,1,1,0, 0];

$sortedBinaryArray = [];

foreach ($binaryArray as $bitIndex => $bit) {
	if (!$bit) {
		array_unshift($sortedBinaryArray, $bit);
		//unset($binaryArray[$bitIndex]);
	} else {
		array_push($sortedBinaryArray, $bit);
		//unset($binaryArray[$bitIndex]);
	}
}

var_dump($sortedBinaryArray);