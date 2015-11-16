<?php
$someArray = [2,3,4,1,5];

$onlyPossitives = true;

foreach ($someArray as $value) {
	if ($value < 0) {
		$onlyPossitives = false;
	}
}

echo $onlyPossitives ? 'true' : 'false';