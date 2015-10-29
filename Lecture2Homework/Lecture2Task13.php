<?php
/*
 * Да се състави програма, която да отгатне колко е студено/топло по
 * въведената температура t в градус Целзий.
 * Температурните интервали са:
 * под -20 ледено студено;
 * между 0 и -20 - студено;
 * между 15 и 0 - хладно;
 * между 25 и 15 - топло;
 * над 25 – горещо.
 * Входни данни: цяло число от интервала [-100..100].
 * Пример: 12
 * Изход: хладно
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$temperature = readline ( "Please enter temperature in Range [-100..100]: " . PHP_EOL );

try {
	checkIfNumber ( $temperature, "\$temperature" );
	
	checkIfWholeNumber ( $temperature, "\$temperature" );
	
	checkIfNumberIsInRange ( -100, 100, $temperature );
	
	define ( "FreezingColdMax", - 21 );
	define ( "ColdMin", - 20 );
	define ( "ColdMax", 0 );
	define ( "MediumTemperatureMin", 1 );
	define ( "MediumTemperatureMax", 15 );
	define ( "WarmMin", - 16 );
	define ( "WarmMax", 25 );
	define ( "HotMin", 26 );
	
	if ($temperature < FreezingColdMax) {
		echo "Ледено студено.";
	} else if (ColdMin < $temperature && $temperature < ColdMax) {
		echo "Студено";
	} else if (MediumTemperatureMin < $temperature && $temperature < MediumTemperatureMax) {
		echo "Хладно";
	} else if (WarmMin < $temperature && $temperature < WarmMax) {
		echo "Топло";
	} else if (HotMin < $temperature) {
		echo "Горещо";
	}
	
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}