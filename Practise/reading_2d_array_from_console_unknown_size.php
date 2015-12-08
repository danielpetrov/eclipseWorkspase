<?php

require_once 'readline.php';

$arrayMulty = [];


// '' - stop reading row
// '.' - stop reading entire array
$input;
do {
	$row = [];
	
	do {
		$input = readline('Enter next element of the array');
		
		if ($input !== '' && $input != '.') {
			$row[] = $input;
		}
		
	} while ($input !== '' && $input != '.');
	
	if (!empty($row)) {
		$arrayMulty[] = $row;
	}
	
} while ($input != '.');

print_r($arrayMulty);