<?php
/*
 * �������� 3 ����� �� ��������� - �1, �2 � �3. ��������� ����������� ��
 * ����, �� �1 �� ��� ���������� �� �2, �2 �� ��� ���������� �� �3, � �3
 * �� ��� ������� �������� �� �1
 */
require_once 'Readline.php';

Print "Please enter numbers for a, b and c" . PHP_EOL;

$a1 = ( float ) readline ( "Enter a1:" . PHP_EOL );

$a2 = ( float ) readline ( "Enter a2:" . PHP_EOL );

$a3 = ( float ) readline ( "Enter a3:" . PHP_EOL );

Print ("Before exchange: " . PHP_EOL) ;
printf ( "a1 : %s " . PHP_EOL, $a1 );
printf ( "a2 : %s" . PHP_EOL, $a2 );
printf ( "a3 : %s" . PHP_EOL, $a3 );

$theExchanger = NULL;
$theSecondExchanger = NULL;

$theExchanger = $a3;
$a3 = $a1;
$theSecondExchanger = $a2;
$a2 = $theExchanger;
$a1 = $theSecondExchanger;

$theExchanger = NULL;
$theSecondExchanger = NULL;

Print ("After exchange: " . PHP_EOL) ;
printf ( "a1 : %s " . PHP_EOL, $a1 );
printf ( "a2 : %s" . PHP_EOL, $a2 );
printf ( "a3 : %s" . PHP_EOL, $a3 );
