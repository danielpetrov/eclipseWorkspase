<?php
/* Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ ред. */
require_once 'Readline.php';

Print "Please enter different numbers for a, b and c" . PHP_EOL;

$a = ( float ) readline ( "Enter a:" . PHP_EOL );

$b = ( float ) readline ( "Enter b:" . PHP_EOL );

$c = ( float ) readline ( "Enter c:" . PHP_EOL );

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

// returns 0 if largest, 1 if medium and 2 if smaller of the three numbers
function findArrayPossitionOfThreeNumbers($numberToFindItsPossition, $num2, $num3) {
	$possition = 2;
	
	if ($numberToFindItsPossition > $num2) {
		$possition --;
	}
	if ($numberToFindItsPossition > $num3) {
		$possition --;
	}
	
	return $possition;
}