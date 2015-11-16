<?php
function checkIfNotNull(){
	
}
function checkIfNumber($value, $var_name = "Variable") {
	if (! is_numeric ( $value )) {
		throw new Exception ( $var_name . " should have a numeric value!" . PHP_EOL );
	}
	
	return true;
}
function checkIfWholeNumber($value, $var_name = "Variable") {
	
	checkIfNumber($value, $var_name);
	
	if (! (floor ( $value ) == $value)) {
		throw new Exception ( $var_name . " should be a whole number!" . PHP_EOL );
	}
	
	return true;
}
function checkIfDifferentNumbers() {
	if (count ( func_get_args () ) !== count ( array_unique ( func_get_args () ) )) {
		throw new Exception ( "Numbers should be diff\\erent!" . PHP_EOL );
	}
	
	return true;
}
function checkIfNumberIsInRange($min, $max, $number, $constantName = "Number") {
	checkIfNumber($number, $constantName = "Number");
	
	if ($min > (int)$number || (int)$number > $max) {
		throw new Exception ( $constantName . " should be between " . $min . " and " . $max . PHP_EOL );
	}
	
	return true;
}
function checkIfStringDoesntContainValue($string, $value, $stringName = "String"){
	if (strpos($string, $value) !== false) {
		throw new Exception ( $stringName . " shouldn't contain " . $value . PHP_EOL );
	}
	
	return true;
}
