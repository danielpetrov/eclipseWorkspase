<?php
require_once 'Readline.php';

$n = ( int ) readline ( "Enter n and see weird nonsense magic:" . PHP_EOL );

$valueToShow = $n - 1;

for ($i = 0; $i < $n; $i++) {
	for ($j = 0; $j < $n; $j++) {
		echo $valueToShow;
	}
	echo PHP_EOL;
	
	$valueToShow += 2;
}