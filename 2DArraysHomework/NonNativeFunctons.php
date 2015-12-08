<?php
/**
 * Returns the number of occurences of given value in array
 * 
 * @param    $mixed_value
 * @param    $mixed_array
 * @return   count - $integer
 */

function array_count_values_of($value, $array) {
	
	if (in_array($value, $array)) {
		return array_count_values_extended($array)[$value];
	} else {
		return 0;
	}
	
}

/**
 * Returns associative array with number of occurences of each element as key 
 * and the element as value
 * The base function can work only with string and integer values
 * 
 * @param    $mixed_array
 * @return   $associativeArray[$numberOfOccurences][$element] 
 */

function array_count_values_extended($array) {
	
	$associativeArray = [ ];

	foreach ( $array as $elementInArray ) {
		if (! isset ( $associativeArray[$elementInArray] )) {
			$associativeArray [$elementInArray] = 1;
		} else {
			$associativeArray [$elementInArray] ++;
		}
	}
	
	return $associativeArray;
}

/**
 * Returns the number of elements in two dimentional array
 *
 * @param    $mixed_array
 * @return   $integer_count
 */

function count_multy($array){
	return count($array, COUNT_RECURSIVE) - count($array, COUNT_NORMAL);
}