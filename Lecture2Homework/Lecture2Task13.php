<?php
/*
 * �� �� ������� ��������, ����� �� ������� ����� � �������/����� ��
 * ���������� ����������� t � ������ ������.
 * �������������� ��������� ��:
 * ��� -20 ������ �������;
 * ����� 0 � -20 - �������;
 * ����� 15 � 0 - ������;
 * ����� 25 � 15 - �����;
 * ��� 25 � ������.
 * ������ �����: ���� ����� �� ��������� [-100..100].
 * ������: 12
 * �����: ������
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$temperature = readline ( "Please enter temperature in Range [-100..100]: " . PHP_EOL );

try {
	checkIfNumber ( $temperature, "\$temperature" );
	
	checkIfWholeNumber ( $temperature, "\$temperature" );
	
	checkIfNumberIsInRange ( -100, 100, $temperature );
	
	define ( "FreezingColdMax", - 21 );
	define ( "ColdMin", - 20 );
	define ( "ColdMax", 0 );
	define ( "MediumTemperatureMin", 1 );
	define ( "MediumTemperatureMax", 15 );
	define ( "WarmMin", - 16 );
	define ( "WarmMax", 25 );
	define ( "HotMin", 26 );
	
	if ($temperature < FreezingColdMax) {
		echo "������ �������.";
	} else if (ColdMin < $temperature && $temperature < ColdMax) {
		echo "�������";
	} else if (MediumTemperatureMin < $temperature && $temperature < MediumTemperatureMax) {
		echo "������";
	} else if (WarmMin < $temperature && $temperature < WarmMax) {
		echo "�����";
	} else if (HotMin < $temperature) {
		echo "������";
	}
	
} catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}