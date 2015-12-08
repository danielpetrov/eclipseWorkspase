<?php
/* Задача 1:
Да се състави програма, чрез която се въвеждат два низа съдържащи
до 40 главни и малки букви.
Като резултат на екрана да се извеждат низовете само с главни и само
с малки букви.
Пример: Abcd Efgh
Изход: ABCD abcd EFGH efgh */

require_once 'Readline.php';

$firstString = readline ( "Enter string max 40 symbols: " . PHP_EOL );
$secondString = readline ( "Enter string max 40 symbols: " . PHP_EOL );

echo implode(" ", array(strtolower($firstString), strtoupper($firstString), strtolower($secondString),
		strtoupper($secondString)));