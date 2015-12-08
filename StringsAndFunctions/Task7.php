<?php
/* Задача 7:
Да се състави програма, която чете набор от думи разделени с
интервал.
Като резултат да се извеждат броя на въведените думи, както и броя
знаци в най-дългата дума.
Пример: asd fg hjkl
Изход: 3 думи, най-дългата е с 4 символа. */

require_once 'Readline.php';

$array = explode(" ", readline ( "Enter sentance: " . PHP_EOL ));
$longestLength = strlen($array[0]);

foreach ($array as $value) {
	if (strlen($value) > $longestLength) {
		$longestLength = strlen($value);
	}
}

echo count($array), " думи, най-дългата е с $longestLength символа.";
