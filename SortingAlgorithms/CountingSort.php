<?php
$array = array(3,4,5,6,7,8,9,9,9,9,3,3,3);
shuffle($array);
$length = count($array);

$minElement = min($array);
$maxElement = max($array);

$sortedArray = [];

for ($i = $minElement; $i <= $maxElement; $i++){
	$sortedArray[$i] = 0;
}

foreach ($array as $value){//sorting
	$sortedArray[$value]++;
}

for($i = $minElement; $i < count($sortedArray); $i++){
	for ($j = 0; $j < $sortedArray[$i]; $j++){
		echo $i;
	}
}

