<?php
/*
 * �������� 2 �������� ����������� ����� �� ���������. ��������
 * ������� ����, �������, ������������, ������� �� ������� �
 * ����������� ������� � ������� ���������� � ������������ ����
 * ���������.
 */
require_once 'Readline.php';

Print "Please enter whole numbers for a and b" . PHP_EOL;

$a = ( int ) readline ( "Enter a:" . PHP_EOL );

$b = ( int ) readline ( "Enter b:" . PHP_EOL );

$sum = $a + $b;
$substraction = $a - $b;
$product = $a * $b;
$division = $a / $b;
$remainderOfDivision = $a % $b;

echo $a . " + " . $b . " = " . $sum . PHP_EOL;

echo $a . " - " . $b . " = " . $substraction . PHP_EOL;

echo $a . " * " . $b . " = " . $product . PHP_EOL;

echo $a . " / " . $b . " = " . $division . PHP_EOL;

echo $a . " % " . $b . " = " . $remainderOfDivision . PHP_EOL;
