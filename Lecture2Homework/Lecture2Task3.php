<?php
/*
 * �������� 2 ���������� � �������� ��������� � ����� PHP ������.
 * ��������� ����� ��������� �� ��������� ����������� ��.
 * ������������ ������ ���������.
 */
$a = 3;

$b = "Hi!";

$theExchanger = NULL;

Print ("Before exchange: " . PHP_EOL) ;
printf ( "a : %s " . PHP_EOL, $a );
printf ( "b : %s" . PHP_EOL, $b );

$theExchanger = $a;
$a = $b;
$b = $theExchanger;

$theExchanger = NULL;

Print ("After exchange: " . PHP_EOL) ;
printf ( "a : %s " . PHP_EOL, $a );
printf ( "b : %s" . PHP_EOL, $b );