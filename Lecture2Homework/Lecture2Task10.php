<?php
/*
 * ������ �� �� ������� �������� � ����. ����� 2 ���� � ���������� 2 �
 * 3 ����� � �� �������� ������������.
 * �� �� ������� ��������, ����� �� ����� ���� ������� ��� �� ��������
 * ��������� � ���� ����, �.�. ��-����� ���� �� �� ����� ����� �� ������.
 * ������ �����: ���������� ����� �� ��������� [10..9999].
 * ������: 107
 * �����: 21 ���� �� 2 �����,
 * 21 ���� �� 3 �����
 * ������������ ���� �� 2 �����
 */
require_once 'Readline.php';

$volume = ( int ) readline ( "Please enter number in Range [10..9999] : " . PHP_EOL );

define ( "FirstKofa", 2 );
define ( "SecondKofa", 3 );

$howMuchTimesBothBucketsWillFillup = ( float ) ($volume / (FirstKofa + SecondKofa));
$extraLitters = (FirstKofa + SecondKofa) * ($howMuchTimesBothBucketsWillFillup - floor ( $howMuchTimesBothBucketsWillFillup ));
$extraLitters = ( int ) round ( $extraLitters );

echo floor ( $howMuchTimesBothBucketsWillFillup ) . " times " . FirstKofa . " Liters" . PHP_EOL;
echo floor ( $howMuchTimesBothBucketsWillFillup ) . " times " . SecondKofa . " Liters" . PHP_EOL;

switch (( int ) $extraLitters) {
	case 1 :
		echo "One extra 1/2 filled up bucket of 2 Liteers";
		break;
	case 2 :
		echo "One extra bucket of 2 Litters";
		break;
	case 3 :
		echo "One extra bucket of 3 Litters";
		break;
	case 4 :
		echo "One extra bucket of 2 Litters and 2/3 filled bucket ot 3 Litters";
		break;
}
