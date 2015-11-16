<?php
/*
 * ��������� ������ �� ������ ������ ������ �� 4 � ����������
 * ����������, �� ��� �������� ������ �� 400, �.�. 1900 �� � ���������,
 * �� 1600 � 2000 �� ���������.
 * ��������� ��������, ����� �� ������ ���, �����, ������ ���������
 * ���������� ����.
 * ������ �����: ��� ����� �� ���, �����, ������.
 * ������: 28, 2, 2000
 * �����: 1,3,2000
 */
require_once 'Readline.php';

$year = ( int ) readline ( "Please enter whole numbers for year between 0 and 3000" . PHP_EOL );

$month = ( int ) readline ( "Please enter whole numbers for month between 1 and 12" . PHP_EOL );

$days = ( int ) readline ( "Please enter whole numbers for days between 1 and 31" . PHP_EOL );

$date = new DateTime ();
$isLeap = false;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 100 == 0 && $year % 400 == 0) {
	$isLeap = true;
}

switch ($month) {
	case 1 :
	case 3 :
	case 5 :
	case 7 :
	case 8 :
	case 10 :
		if ($days < 31) {
			$days ++;
		} else {
			$days = 1;
			$month ++;
		}
		break;
	case 2 :
		if ($isLeap) {
			if ($days < 29) {
				$days ++;
			} else {
				$days = 1;
				$month ++;
			}
		} else {
			if ($days < 28) {
				$days ++;
			} else {
				$days = 1;
				$month ++;
			}
		}
		break;
	case 4 :
	case 6 :
	case 9 :
	case 11 :
		if ($days < 30) {
			$days ++;
		} else {
			$days = 1;
			$month ++;
		}
		break;
	case 12 :
		if ($days < 31) {
			$days ++;
		} else {
			$days = 1;
			$month = 1;
			$year ++;
		}
		break;
}

$date->setDate ( $year, $month, $days );
$result = $date->format ( 'Y-m-d' );

echo "Next Date: " . $result;
