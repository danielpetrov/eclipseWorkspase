<?php
/* ������ 14:
�� �� ������� �����, ����� ������ �� �������� ����� N
� ����� ���������� �� N! */

function factoriel($n){
	$result = 1;
	$currentNumber = 1;
	
	do{
		$result *= $currentNumber;
	}while($currentNumber++ < $n);
	
	return $result;
}