<?php
/*
 * Съставете програма, която по дадено трицифренo число проверява
 * дали числото се дели на всяка своя цифра. Във въведеното число да
 * няма цифра 0.
 */
require_once 'Readline.php';

$number = readline ( "Please enter number in Range [100..999] without zeros: " . PHP_EOL );

if (! ($number % $number [0])) {
	echo "The number" . $number . " is dividable by " . $number [0] . PHP_EOL;
}

if (! ($number % $number [1])) {
	echo "The number" . $number . " is dividable by " . $number [1] . PHP_EOL;
}

if (! ($number % $number [2])) {
	echo "The number" . $number . " is dividable by " . $number [2] . PHP_EOL;
}
