<?php
$someArray = [4,3,9,6];

$IsNazuben = true;

$arrayCount = count($someArray);


for ($i = 1; $i < $arrayCount - 1; $i++) {
	if (!(($someArray[$i] > $someArray[$i - 1]) && ($someArray[$i] > $someArray[$i + 1])
			|| ($someArray[$i] < $someArray[$i - 1]) && ($someArray[$i] < $someArray[$i + 1]))) {
		$IsNazuben = false;
	}
}

echo $IsNazuben ? 'true' : 'false';