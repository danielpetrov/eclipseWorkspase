<?php
/* ������ 4:
�� �� ������� ��������, ���� ����� �� �������� ������� � ������
����� �� �������� �� ����� ��� ��� �������� ����������������
(���������� �� �����):
������: 1, 9
�����:
1
1 2
1 2 3
... ��
1 2 3 4 5 6 7 8 9 */
triangle(1, 9);

function triangle($start, $end, $counter = 0){
	if($counter < $start){
		$counter = $start;
	}
	if ($counter > $end) {
		return;
	}
	drawSymbol($start, $counter);
	echo PHP_EOL;
	triangle($start, $end, $counter + 1);
}

function drawSymbol($startNumber, $endNumber){
	if ($startNumber > $endNumber) {
		return;
	}
	echo $startNumber;
	drawSymbol($startNumber + 1, $endNumber);
}