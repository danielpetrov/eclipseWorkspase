<?php

require_once 'readline.php';

$arrayMulty = [];

$rows = 3;
$cols = 3;

for ($row = 0; $row < $rows; $row++) {		
	
	$arrayMulty[$row] = [];
	
	for ($col = 0; $col < $cols; $col++) {
		$arrayMulty[$row][$col] = readline(
			'Enter element [' . $row . '][' . $col . ']'
		);
	}
}

print_r($arrayMulty);
