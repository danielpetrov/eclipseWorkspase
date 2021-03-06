<?php
/* �� �� ������� ��������, ����� ������� ���������� ����� �� ���������
[0..24].
�������� �� ������ ������������� ��������� ��������� ���������
���.
��������� ��:
[18..4] - ����� �����;
[4..9] - ����� ����;
[9..18] - ����� ���
������: 10
�����: ����� ��� */
require_once 'Readline.php';
require_once 'Exceptions.php';

$hour = readline("Please enter hour in range [0..23]" . PHP_EOL);

try {
	checkIfNumber($hour, '$hour');
	
	checkIfWholeNumber($hour, '$hour');
	
	checkIfNumberIsInRange(0, 23, $hour, '$hour');
	
	if (18 <= $hour || $hour < 4) {
		echo "����� �����!";
	}
	if (4 <= $hour && $hour < 9) {
		echo "����� ����!";
	}
	if (9 <= $hour && $hour < 18) {
		echo "����� ���!";
	}
} catch (Exception $e) {
	echo "Message: " . $e -> getMessage();
	exit(1);
}