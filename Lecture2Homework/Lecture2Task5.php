<?php
/* Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ ред. */
require_once 'Readline.php';
require_once 'Exceptions.php';

Print "Please enter numbers for a, b and c" . PHP_EOL;

$a = readline ( "Enter a:" . PHP_EOL );

$b = readline ( "Enter b:" . PHP_EOL );

$c = readline ( "Enter c:" . PHP_EOL );

try {
	checkIfNumber ( $a, "\$a" );
	checkIfNumber ( $b, "\$b" );
	checkIfNumber ( $c, "\$c" );
	
	checkIfDifferentNumbers ( $a, $b, $c );
	
	$array = [ ];
	
	$possitionOfA = findArrayPossitionOfThreeNumbers ( $a, $b, $c );
	$possitionOfB = findArrayPossitionOfThreeNumbers ( $b, $c, $a );
	$possitionOfC = findArrayPossitionOfThreeNumbers ( $c, $b, $a );
	
	$array [$possitionOfA] = $a;
	$array [$possitionOfB] = $b;
	$array [$possitionOfC] = $c;
	
	Print ("Numbers in descending order: ") ;
	
	for($i = 0; $i < 3; $i ++) {
		echo $array [$i] . " ";
	}
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}

// returns 0 if largest, 1 if medium and 2 if smaller of the three numbers
function findArrayPossitionOfThreeNumbers($numberToFindItsPossition, $num2, $num3) {
	$counter = 2;
	
	if ($numberToFindItsPossition > $num2) {
		$counter --;
	}
	if ($numberToFindItsPossition > $num3) {
		$counter --;
	}
	
	return $counter;
}