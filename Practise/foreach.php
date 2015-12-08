<?php

$array = [1, 2, 3, 4,];

// var_dump(key($array));
// var_dump(current($array));
// next($array);
// echo str_repeat('-', 10), PHP_EOL;
// var_dump(key($array));
// var_dump(current($array));

foreach ($array as $value) {
	var_dump($value);
	if ($value == 2) {
		break;
	}
}
echo str_repeat('-', 10), PHP_EOL;
var_dump(current($array));

// for ($i = count($array) - 1; $i >= 0; $i--) {
// 	echo $array[$i], PHP_EOL;
// }

// for ($i = 4 ; $i < 10; $i++) {
// 	echo $array[$i];
// }

$cars = [
	'Ford' => '200kmh',	
	'Ferarry' => '270kmh',
	'Lamborgini' => '370kmh',
];

$cars2 = $cars;

foreach ($cars2 as $key => $value) {
	echo $key ,  ' goes with ', $value, PHP_EOL;
}



