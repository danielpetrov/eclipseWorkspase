<?php
/* Задача 5:
Да се състави програма, чрез която се въвеждат 2 редици от знаци
(думи).
Ако в двете редици участва един и същи знак, да се изведе на екрана
първата редица хоризонтално, а втората вертикално, така че да се
пресичат в общия си знак.
Ако редиците нямат общ знак да се изведе само уведомително
съобщение.
Пример :
м
а
шапка
и
н
а */
// Примерът е грешен според написаното условие. Първият общ символ, в който се засичат двете думи са
// мАшина, шАпка. Никъде в условието не е написано, че трябва да проверяваме само първия знак от
// втория низ.
require_once 'Readline.php';

$firstString = readline ( "Enter string: " . PHP_EOL );
$secondString = readline ( "Enter string: " . PHP_EOL );

$hasCross = false;
$stack = [];
$spacesToShift = 0;

for ($i = 0; $i < strlen($firstString); $i++) {
	array_push($stack, $firstString[$i]);
	if (!$hasCross) {
		for ($j = 0; $j < strlen($secondString); $j++) {
			if (!strcmp($firstString[$i], $secondString[$j]) && !$hasCross) {
				array_pop($stack);
				array_push($stack, $secondString);
				$spacesToShift = $j;
				$hasCross = true;
			}
		}
	}
}

if ($hasCross) {
	foreach ($stack as $key => $value) {
		if (strlen($value) == 1) {
			echo str_repeat(" ", $spacesToShift);
		}
		echo $value, PHP_EOL;
	}
} else {
	echo "Редиците нямат общ знак.";
}
