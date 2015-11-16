<?php
// * Task5. Write a program that reads a positive number and writes its binary representation.
require_once 'Readline.php';
$number = ( int ) readline ( "Enter a number" );

$duble = $number;
$numberToBitString = "";
$counter = 0;
while($number){
	if ($number & 1) {
		$numberToBitString .= "1";//reversed
	} else{
		$numberToBitString .= "0";//reversed
	}
	$number = $number >> $counter;
	$counter++;
}

echo $numberToBitString . PHP_EOL;
echo decbin($duble);