<?php
/* ������ 4:
�� �� ������� ��������, ����� �� ����� �����, ����� � �������� ���
�������� ��� � ����� ������� ������ ������� �� ���������� ��
�����. ���� �������� �� �� ������ ��� ����� � �� �� ������.
������:
1 3 5 7 9 11 45
6
�����:
1 3 5 6 7 9 11 45 */
$array = [1,3,5,7,8,11,45];
$n = 47;
$isLast = TRUE;
for ($i = 0; $i < count($array); $i++) {
	if($n < $array[$i]) {
		array_splice( $array, $i, 0, $n );
		$isLast = FALSE;
		break;
	}
}

if ($isLast) {
	array_push($array, $n);
}
print_r($array);