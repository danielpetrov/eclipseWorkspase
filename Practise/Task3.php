<?php
require_once 'Readline.php';

$ch = readline("Enter ch : " . PHP_EOL);

$someStringArray = ["we","tr","br","sda"];

$hasTheChar = false;

foreach ($someStringArray as $string) {
	if ($string == $ch) {
		$hasTheChar = true;
	};
}

echo $hasTheChar ? 'true' : 'false';