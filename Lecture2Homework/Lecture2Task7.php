<?php
/*
 * �������� 3 ���������� �� ��������� � ���, ���� ����, ���� ��� �����
 * � ����� ��� �������� �� ��� ��.
 * ��������� ��������, ����� ����� ������� �� ������ �� ���� ����� ��
 * ������� �����:
 * - ��� ��� ����� ���� �� �������
 * - ��� ���� ���� �� �� ���� ���������
 * - ��� ����� � �� ���� ����� � �� ��� ���
 * - ��� ��� ����� �� ������ �� ���� � ��������
 * - ��� ���� ��-����� �� 10 �� �� ����� �� ����
 */
require_once 'Readline.php';
require_once 'Exceptions.php';

$hour = readline ( "Please enter whole numbers for hours between 0 and 23" . PHP_EOL );

$minutes = readline ( "Please enter whole numbers for minutes between 0 and 59" . PHP_EOL );

$money = readline ( "Please enter number for how much money you have" . PHP_EOL );

$ifSick = readline ( "Are you sick? : " );

try {
	checkIfNumber ( $hour, "\$hour" );
	checkIfNumber ( $minutes, "\$minutes" );
	checkIfNumber ( $money, "\$money" );
	
	checkIfWholeNumber ( $hour, "\$hour" );
	checkIfWholeNumber ( $minutes, "\$minutes" );
	
	checkIfNumberIsInRange ( 0, 23, $hour, "\$hour" );
	checkIfNumberIsInRange ( 0, 59, $minutes, "\$minutes" );
	
	switch (strtolower ( $ifSick )) {
		case "yes" :
			$ifSick = true;
			break;
		case "no" :
			$ifSick = false;
			break;
		default :
			throw new Exception ( "Please enter yes or no!" );
			break;
	}
	
	$date = new DateTime ();
	$date->setTime ( $hour, $minutes );
	
	if ($ifSick) {
		echo "I wont go out. ";
		if ($money > 0) {
			echo "I will buy medicine.";
		} else {
			echo "I will stay home and drink tea.";
		}
	} elseif ($money >= 10) {
		echo "I will go out to the movies with friends. ";
	} else {
		echo "I will go to cofee";
	}
} 

catch ( Exception $e ) {
	echo "Message: " . $e->getMessage ();
	exit(1);
}