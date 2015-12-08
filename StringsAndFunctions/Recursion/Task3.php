<?php
/* ������ 3:
�� �� ������� ��������, ����� ��������� ���� �������� ����������
����� � ������.
������: 101
�����: ������ */

$n = 101;
$isPrime = checkIfPrime((int)$n, (int)sqrt($n));

echo $isPrime ? "������" : "�� � ������";

function checkIfPrime($n, $i){
	
	if ($n <= 1) {
		return false;
	}
	 if (!($n % $i)) {
		return false;
	} 
	if ($i == 2) {
		return true;
	}
	
	return checkIfPrime($n, $i - 1);
}