<?php
/* Задача 4:
Да се състави програма, чрез която по въведени трите имена на двама
човека разделени със запетая, се извежда чие име има по-голям сбор
от ASCII кодовете на съставящите името букви.
Пример: Anna Dosewa Asenowa, Iwo Peew Peew
Изход: Anna Dosewa Asenowa */

require_once 'Readline.php';

$names = readline ( "Enter names: " . PHP_EOL );

$names = explode(',', $names);

$sumOfAscii = [ 0 , 0 ];

foreach ($names as $key => $name) {
	for ($i = 0; $i < strlen($name); $i++) {
		$sumOfAscii[$key] += ord($name[$i]);
	}
}

echo $sumOfAscii[0] > $sumOfAscii[1] ? $names[0] : $names[1];


