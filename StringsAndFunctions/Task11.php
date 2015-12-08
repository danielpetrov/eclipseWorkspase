<?php
// Задача 11:
// Да се създаде метод, който отпечатва масив в конзолата.

function printArray($array, $delimiter){
	foreach ($array as $value) {
		echo $value, $delimiter;
	}
}