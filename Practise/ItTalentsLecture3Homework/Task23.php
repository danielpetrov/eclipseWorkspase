<?php
/*
 * ������ 23:
 * �� �� ������� ��������, ����� ���� ����� while
 * ������� ��������� �� ���������, �� ��� ����������.
 * �.�. ��� � �������� 4*5 �� �� ������� 5*4.
 * ������:
 * 1-�� ���: 1*1; 1*2; 1*3; 1*4; 1*5; 1*6; 1*7; 1*8; 1*9;
 * 2-�� �e�: 2*2; 2*3; 2*4; 2*5; 2*6; 2*7; 2*8; 2*9;
 * ... 3*3 3*4
 * 9-�� ���: 9*9;
 */
$numberOnTheLeft = 1;
$numberOnTheRight = 1;

$rowCounter = 1;

while ( $rowCounter <= 9 ) {
	switch ($rowCounter) {
		case 1 :
			echo $rowCounter . "-�� ���: ";
			break;
		case 2 :
			echo $rowCounter . "-�� ���: ";
			break;
		case 7 :
		case 8 :
			echo $rowCounter . "-�� ���: ";
			break;
		default :
			echo $rowCounter . "-�� ���: ";
	}
	
	while ( $numberOnTheRight <= 9 ) {
		echo $numberOnTheLeft . "*" . $numberOnTheRight . "=" 
				. $numberOnTheLeft * $numberOnTheRight ++ . "; ";
	}
	
	echo PHP_EOL;
	
	$numberOnTheRight = ++ $numberOnTheLeft;
	$rowCounter ++;
}

