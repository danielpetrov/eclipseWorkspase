<?php
/*
 * Въведете 3 променливи от конзолата – час, сума пари, дали съм здрав
 * – число със стойност да или не.
 * Съставете програма, която взема решения на базата на тези данни по
 * следния начин:
 * - ако съм болен няма да излизам
 * - ако имам пари ще си купя лекарства
 * - ако нямам – ще стоя вкъщи и ще пия чай
 * - ако съм здрав ще изляза на кино с приятели
 * - ако имам по-малко от 10 лв ще отида на кафе
 */
require_once 'Readline.php';

$hour = ( int ) readline ( "Please enter whole numbers for hours between 0 and 23" . PHP_EOL );

$minutes = ( int ) readline ( "Please enter whole numbers for minutes between 0 and 59" . PHP_EOL );

$money = ( float ) readline ( "Please enter number for how much money you have" . PHP_EOL );

$ifSick = readline ( "Are you sick? : " );

switch (strtolower ( $ifSick )) {
	case "yes" :
		$ifSick = true;
		break;
	case "no" :
		$ifSick = false;
		break;
	default :
		echo "Please enter yes or no!";
		break;
}

$date = new DateTime ();
$date->setTime ( $hour, $minutes );

if ($ifSick) {
	echo "I wont go out. ";
	if ($money > 0) {
		echo "I will buy medicine.";
	} else {
		echo "I will stay home and drink tea.";
	}
} elseif ($money >= 10) {
	echo "I will go out to the movies with friends. ";
} else {
	echo "I will go to cofee";
}
