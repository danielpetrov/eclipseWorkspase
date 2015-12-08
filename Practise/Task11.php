<?php

require_once 'Readline.php';

$m = floor(readline("Enter m" . PHP_EOL));

$n = floor(readline("Enter n" . PHP_EOL));

$fillingNumber = 1;

$multyArrayA = [];

for ($i = 0; $i < $n; $i++) {
	for ($j = 0; $j < $m; $j++) {
		$multyArrayA[$i][$j] = $fillingNumber++;
	}
}

//print_r($multyArrayA);

$multyArrayB = [];

$fillingNumber = 1;

$startingRow = 0;
$startingColumn = 0;

$endingRow = 0;
$endingColumn = 0;

$fillingNumber = 1;

$currentRow = 0;
$currentColumn = 0;

do{
	$currentRow = $startingRow;
	$currentColumn = $startingColumn;
	/* echo "SR - ";
	var_dump($startingRow);
	echo "SC - ";
	var_dump($startingColumn);
	echo "ER - ";
	var_dump($endingRow);
	echo "EC - ";
	var_dump($endingColumn); */
	do{
		/* echo "CR - ";
		var_dump($currentRow);
		echo "CC - ";
		var_dump($currentColumn); */
		$multyArrayB[$currentRow--][$currentColumn++] = $fillingNumber++;
	}while($currentRow >= $endingRow && $currentColumn <= $endingColumn);
	
	if ($startingRow < $m - 1) {
		$startingRow++;
	} else {
		$startingColumn++;
	}
	
	if($endingColumn < $n - 1){
		$endingColumn++;
	} else {
		$endingRow++;
	}
	
	
	
}while(!(($startingRow == $m - 1) && ($startingColumn == $n - 1)));

$multyArrayB[$m - 1][$n - 1] = $fillingNumber;

foreach ($multyArrayB as $rowIndex => $row) {
	foreach ($row as $colIndex => $col) {
		echo $col . " ";
	};
	echo PHP_EOL;
} 