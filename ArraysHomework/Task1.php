<?php
/* ������ 1:
�� �� ������� ����� � �� �� ������ ���-������� ����� ������ ��
3 �� ������. */
require_once 'Readline.php';

$someIntegerArray = [];

do {
	$input = readline('Enter next element of the array');

	if ($input !== '') {
		$someIntegerArray[] = (int)$input;
	}

} while ($input !== '');

$minNumber = PHP_INT_MAX;

$hasKratnoNaTri = false;

foreach ($someIntegerArray as $value) {
	if ( !($value % 3) && ($minNumber > $value) ) {
		$hasKratnoNaTri = true;
		$minNumber = $value;
	}
}

echo $hasKratnoNaTri ? $minNumber : "The array doesnt have a number 'kratno na tri'";
