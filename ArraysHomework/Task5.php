<?php
/*
 * ������ 5:
 * �������� ��������, ����� ������� ����� � 10 �������� �
 * ������������ ����� �� ���������� ��� �������� ����� �� ������� ��
 * �������� ������� �� 3.
 * �� �� ������� ���������� �� ������
 */
define ( "ArrayMaxLength", 10 );
$someIntegerArray = [ ];

for($i = 0; $i < ArrayMaxLength; $i ++) {
	$someIntegerArray [] = $i * 3;
}

for($i = 0; $i < ArrayMaxLength; $i ++) {
	echo $someIntegerArray [$i] . " ";
}