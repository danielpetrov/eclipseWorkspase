<?php
/* ������ 7:
����� ������������� �������� ��������� �� ���������� �����,
�������� � ��������� ������� � ������� 6 ���� � 6 ������.
�� �� ������� �������� , ���� ����� �� ������ ������ �� ������
��������, ����� ���� �� ������� �� ��� � ������ � ����� �����.
���������� �� ������� ����������� ���� �� ����� ������� ��� ��
����������� �������, ����� � ������ ���� �� ���� ��������.
�� �� �������� ���� ���� �����.
�����:
11, ,13, ,15, , ���� �� ���������� �� ����: 39
22, ,24, ,26, ���� �� ���������� �� ����: 72
31, ,33, ,35, , ���� �� ���������� �� ����: 99
42, ,44, ,46, ���� �� ���������� �� ����: 132
51, ,53, ,55, , ���� �� ���������� �� ����: 159
62, ,64, ,66 ���� �� ���������� �� ����: 192
���� �� ����������: 693 */

$arrayMulty = [
		[11,12,13,14,15,16],
		[21,22,23,24,25,26],
		[31,32,33,34,35,36],
		[41,42,43,44,45,46],
		[51,52,53,54,55,56],
		[61,62,63,64,65,66]
];

$arrayMultyLength = 36;//count_multy($arrayMulty);count uses another cicle?
$arrayMultyRowLength = 6;

$counterForColumn = 0;
$counterForRow = 0;

$finalSum = 0;
$currentRowSum = 0;

for ($i = 0; $i < $arrayMultyLength; $i++) {
	
	if (!(($counterForColumn + $counterForRow) % 2)) {
		$currentRowSum += $arrayMulty[$counterForRow][$counterForColumn];
		echo $arrayMulty[$counterForRow][$counterForColumn] . ',';
	}

	if($counterForColumn++ == ($arrayMultyRowLength - 1)){
		echo " ���� �� ���������� �� ����: $currentRowSum" . PHP_EOL;
		
		$finalSum += $currentRowSum;
		$currentRowSum = 0;
		
		$counterForColumn = 0;
		$counterForRow++;
	}
}

echo "���� �� ����������: $finalSum";