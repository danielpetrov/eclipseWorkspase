<?php
/* ������ 8:
�� �� ������� ��������, ���� ����� �� ������� ��� �� �������
(������, ���).
���������� �� ������ �� ������ ���� ��������� ������ � ���������,
�.�. ���� ����� ������-������� � �������-������ � ���� � ���.
����: �����
�����: ��.
����: ��������
�����: �� */
require_once 'Readline.php';

$string = readline ( "Enter string: " . PHP_EOL );

echo isPalindrom($string, 0) ? "��" : "��";

function isPalindrom($string, $counter = 0){
	if ($counter > strlen($string) / 2) {
		return true;
	}
	
	if ( strcmp( $string[$counter], $string[ strlen($string) - $counter - 1 ] ) ) {
		return false;
	}
	
	return isPalindrom($string, $counter + 1);
}

