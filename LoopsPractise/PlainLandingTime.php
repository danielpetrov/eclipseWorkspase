<?php
require_once 'Readline.php';
require_once 'Exception.php';

$x = ( int ) readline ( "Please enter flying off hour [0..23]: " . PHP_EOL );
$y = ( int ) readline ( "Please enter flying off minutes [0..59]: " . PHP_EOL );
$z = ( int ) readline ( "Please enter how much time the flight is: " . PHP_EOL );

$flightHours = ( int ) floor ( $z / 60 );
$flightMinutes = $z;
for($i = 0; $i < $flightHours; $i ++) {
	$flightMinutes -= 60;
}

$arrivedHours = $x + $flightHours;
$arrivedMinutes = $z + $flightMinutes;

If ($arrivedHours >= 24) {
	$arrivedHours -= 24;
}
