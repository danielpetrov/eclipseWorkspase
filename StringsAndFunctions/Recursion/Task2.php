<?php
/* ������ 2:
�� �� ������� ��������, ����� ��������� ������������ �� ��� 
���������� ����� =>2, ���� �� �������� ���� ��������.
������ �����: 2 ���������� �����.
������: 4, 5 
�����: 20 */
//4 * 5 = 4 + 4 + 4 + 4 + 4 
echo multiplicationByAdding(4, 5, 0);

function multiplicationByAdding($number, $times, $result){
	
	if ($times == 0) {
		return $result;
	}
	
	$result += $number;
	
	return multiplicationByAdding($number, $times - 1, $result);
}