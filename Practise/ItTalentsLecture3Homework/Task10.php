<?php
/* ������10:
�������� ����� �� ������������ � ���������� ���� �
������. ������ ����� � ���� ����� �� ���� ���� �� 1 � �� ���� ��. */

require_once 'Readline.php';
$numberToCheckIfPrime = ( int ) floor ( readline ( "Please enter a: " . PHP_EOL ) );
$sqrtOfTheNumber = sqrt($numberToCheckIfPrime);

$isPrime = true;

if ($numberToCheckIfPrime <= 1) {
	$isPrime = false;
}

for($i = 2; $i < $sqrtOfTheNumber; $i ++) {
	if (!($numberToCheckIfPrime % $i)) {
		$isPrime = false;
		break;
	}
}

if ($isPrime) {
	echo "The number is prime";
} else {
	echo "The number is not prime";
}
