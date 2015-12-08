<?php
/*
 * Задача 5:
 * Напишете програма, която създава масив с 10 елемента и
 * инициализира всеки от елементите със стойност равна на индекса на
 * елемента умножен по 3.
 * Да се изведат елементите на екрана
 */
define ( "ArrayMaxLength", 10 );
$someIntegerArray = [ ];

for($i = 0; $i < ArrayMaxLength; $i ++) {
	$someIntegerArray [] = $i * 3;
}

for($i = 0; $i < ArrayMaxLength; $i ++) {
	echo $someIntegerArray [$i] . " ";
}