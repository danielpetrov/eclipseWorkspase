<?php
/*
 * ������ 14:
 * ����� ������������� ������� ��������� �����, �������� ������
 * �����.
 * �� �� ������� ��������, ���� ����� �� ������� ���� �������� ���
 * ��������� �� ��������� [-2.99..2.99] � ������ ������ �� ������� �� ������.
 * ������: 7.1,8.5,0.2,3.7,0.99,1.4,-3.5,-110,212,341,1.2
 * �����: 0.2; 0.99; 1.4; 1.2
 */
$realNumbersArray = [ 
		7.1,
		8.5,
		0.2,
		3.7,
		0.99,
		1.4,
		- 3.5,
		- 110,
		212,
		341,
		1.2,
		-2.99,
		3
];

$allNumbersSmallerThanThree = [];

foreach ($realNumbersArray as $realNumber){
	if (abs($realNumber) <= 2.99) {
		$allNumbersSmallerThanThree[] = $realNumber;
	}
}

echo implode('; ', $allNumbersSmallerThanThree);