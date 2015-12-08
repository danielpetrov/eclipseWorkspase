<?php
/*
 * ������ 21:
 * ������ � �������� ����� �����.
 * ��������� �� ������ �� ����� �: 2,3,4,5,6,7,8,9,10, ����, ����,
 * ���, ���.
 * ��������� �� ���� �� ������� �: ������, ����, ����, ����.
 * �� �� ������� ��������, ���� ����� �� ������� N - ����� ��
 * ��������� [1..51] � �� �������� ��������� ����� ����� �
 * ���������� ��-������ ����� �� �������.
 * ������: 47.
 * �����: ��� ����, ��� ����, ��� ������, ��� ����, ��� ����, ��� ����
 */
require_once 'Readline.php';

$number = ( int ) readline ( "Enter number in Range[1..52]:" . PHP_EOL );

$currentColor = NULL;
$currentCard = NULL;

$currentCardFromDeck = 1;

for($i = 1; $i <= 13; $i ++) {
	for($j = 1; $j <= 4; $j ++) {
		switch ($i) {
			case 10 :
				$currentCard = "����";
				break;
			case 11 :
				$currentCard = "����";
				break;
			case 12 :
				$currentCard = "���";
				break;
			case 13 :
				$currentCard = "���";
				break;
			default :
				$currentCard = $i + 1 . "";
				break;
		}
		
		switch ($j) {
			case 1 :
				$currentColor = "������";
				break;
			case 2 :
				$currentColor = "����";
				break;
			case 3 :
				$currentColor = "����";
				break;
			case 4 :
				$currentColor = "����";
				break;
		}
		if ($currentCardFromDeck ++ >= $number) {
			echo $currentCard . " " . $currentColor;
			if ($i != 13 || $j != 4) {
				echo ", ";
			}
		}
	}
}