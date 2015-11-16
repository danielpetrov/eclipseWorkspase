<?php
/*
 * Task2. Write a program that prints all odd numbers between 0 and 50 and all even numbers
 * between 51 and 100.
 */
for($i = 0; $i <= 50; $i ++) {
	if ($i % 2) {
		echo $i . " ";
	}
}

echo PHP_EOL;

for ($i = 51; $i <= 100; $i++) {
	if (! ($i % 2)) {
		echo $i . " ";
	}
}