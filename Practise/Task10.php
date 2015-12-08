<?php
$associativeArray = [ ];

$someArray = array ( 4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3 );

foreach ( $someArray as $elementInArray ) {
	if (! array_key_exists ( $elementInArray, $associativeArray )) {
		$associativeArray [$elementInArray] = 1;
	} else {
		$associativeArray [$elementInArray] ++;
	}
}

print_r($associativeArray);

echo array_search(max($associativeArray), $associativeArray);