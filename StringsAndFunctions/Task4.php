<?php
/* ������ 4:
�� �� ������� ��������, ���� ����� �� �������� ����� ����� �� �����
������ ��������� ��� �������, �� ������� ��� ��� ��� ��-����� ����
�� ASCII �������� �� ����������� ����� �����.
������: Anna Dosewa Asenowa, Iwo Peew Peew
�����: Anna Dosewa Asenowa */

require_once 'Readline.php';

$names = readline ( "Enter names: " . PHP_EOL );

$names = explode(',', $names);

$sumOfAscii = [ 0 , 0 ];

foreach ($names as $key => $name) {
	for ($i = 0; $i < strlen($name); $i++) {
		$sumOfAscii[$key] += ord($name[$i]);
	}
}

echo $sumOfAscii[0] > $sumOfAscii[1] ? $names[0] : $names[1];


