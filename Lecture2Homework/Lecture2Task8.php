<?php
/*
 * Да се състави програма, която получава от конзолата 4-цифренo
 * естествено число от интервала [1000.. 9999]. От това число се
 * формират 2 нови 2-цифрени числа. Първото число се формира от 1-та
 * и 4-та цифра на въведеното число. Второто число се формира от 2-рa -
 * 3-та цифра на въведеното число. Като резултат да се изведе дали 1-то
 * ново число e по-малко <, равно = или по-голямо от 2-то число.
 * Пример: 3332 Изход: по-малко (32<33)
 * Пример: 1144 Изход: равни (14=14)
 * Пример: 9875 Изход: по-голямо (95>87)
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$fourDigitNumber = readline ( "Please enter four digit number : " . PHP_EOL );

try {
	checkIfNumber ( $fourDigitNumber, "\$fourDigitNumber" );
	
	checkIfWholeNumber ( $fourDigitNumber, "\$fourDigitNumber" );
	
	checkIfNumberIsInRange ( 1000, 9999, $fourDigitNumber );
	
	$firstAndFourthDigit = $fourDigitNumber [0] . $fourDigitNumber [3];
	$secondAndThirdDigit = $fourDigitNumber [1] . $fourDigitNumber [2];
	
	if (( int ) $firstAndFourthDigit > ( int ) $secondAndThirdDigit) {
		echo $firstAndFourthDigit . " > " . $secondAndThirdDigit;
	} else if (( int ) $firstAndFourthDigit == ( int ) $secondAndThirdDigit) {
		echo $firstAndFourthDigit . " = " . $secondAndThirdDigit;
	} else {
		echo $firstAndFourthDigit . " < " . $secondAndThirdDigit;
	}
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}