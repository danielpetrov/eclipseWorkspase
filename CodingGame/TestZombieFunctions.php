<?php
echo calculateDistance(0,10,0,10);

function calculateDistance($x1, $x2, $y1, $y2){
	return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
}

?>