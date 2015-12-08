<?php
$array = [1,2,15,21,43,56,78,99];

$result = binarySearch($array, 1, 0, count($array) - 1);

echo $result; 

function binarySearch($array, $needle, $left, $right){
	
	$middle = (int)(($left + $right) / 2);
	
	if(!($left > $right)){
		if($needle > $array[$middle]){
			return binarySearch($array, $needle, $middle + 1, $right);
		} else if($needle < $array[$middle]) {
			return binarySearch($array, $needle, $left, $middle - 1);
		} else{
			return $middle;
		} 
	} else {
		return -1;
	}
}