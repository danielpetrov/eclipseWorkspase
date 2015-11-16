<?php
/*
 * Да се състави програма, която
 * получва от конзола
 * 2 естествени
 * двуцифрени числа a,b.
 * Програмата да изведе съобщение дали последната цифра от
 * произведението на двете числа е четна, както и самата цифра.
 * Входни данни: a,b - естествени числа от интервала [10..99].
 * Пример: 15, 25
 * Изход: 375, 5 нечетна
 */
require_once 'Readline.php';

$a = ( int ) readline ( "Please enter a in Range [10..99]: " . PHP_EOL );
$b = ( int ) readline ( "Please enter b in Range [10..99]: " . PHP_EOL );

$product = ( string ) ($a * $b);
$lastNumberPossition = 2;

if ($product > 999) {
	$lastNumberPossition = 3;
}

echo $product . ", " . $product [$lastNumberPossition] . " ";

if (! (( int ) $product % 2)) {
	echo "четна";
} else {
	echo "нечетна";
}
