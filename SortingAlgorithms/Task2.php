<?php
/* ������2:
�� �������� �������� ������������ ���������������� �� �������� �
����� ���������.
�� �� ������� ��������, ����� ��������� ��� � ���-������� ��������
� ������������� ������� ����� �� ���������� �����.
���������� �� ������� �������� ��� �� ������ � ���-�������
�������� � ����.
������:
1 3 3 7 9 9 9 9 11 11 12 14
�����:
���-������� �������� �: 4 ��������
���� �� ����������: 3 */
$array = array(1, 3, 3, 7, 9, 9, 9, 9, 11, 11, 12, 14);

$maxValley = 0;
$currentValley = 1;
$allValleys = 0;
$inValley = false;

for ($i = 0; $i < count($array) - 1; $i++) {
	if ($array[$i] === $array[$i + 1]) {
		$currentValley++;
		if ($currentValley > $maxValley) {
			$maxValley = $currentValley;
		}
		
		$inValley = true;
	} else {
		$currentValley = 1;
		if ($inValley) {
			$inValley = false;
			$allValleys++;
			
		}
	}
	
	if ($inValley && $i == count($array) - 2) {
		$allValleys++;
	}
}
echo "���-������� �������� �: $maxValley" . PHP_EOL;
echo "���� �� ����������: $allValleys ". PHP_EOL;