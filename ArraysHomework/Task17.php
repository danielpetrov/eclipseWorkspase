<?php
/* ������ 17:
���� ������ �� ���������� ����� �� �������� �������������� ������,
��� �� ���������� � �� ���������� ���������:
N1 < N2 > N3 < N4 > N5 <..
��������� ��������, ����� ��������� ���� �������� � ���������
����� ������ �� ����� ���������� ������� ����������.
������: 1 3 2 4 3 7
�����: ��������� ������������ �� �������������� ������ ������ */

$someArray = [1, 3, 2, 4, 3, 7];

$IsNazuben = true;

$arrayCount = count($someArray);


for ($i = 1; $i < $arrayCount - 1; $i++) {
	if (!(($someArray[$i] > $someArray[$i - 1]) && ($someArray[$i] > $someArray[$i + 1])
			|| ($someArray[$i] < $someArray[$i - 1]) && ($someArray[$i] < $someArray[$i + 1]))) {
				$IsNazuben = false;
			}
}

echo $IsNazuben ? 'true' : 'false';