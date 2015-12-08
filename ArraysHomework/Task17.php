<?php
/* Задача 17:
Една редица от естествени числа ще наричаме зигзагообразна нагоре,
ако за елементите и са изпълняват условията:
N1 < N2 > N3 < N4 > N5 <..
Съставете програма, която проверява дали въведени в едномерен
масив редица от числа изпълняват горните изисквания.
Пример: 1 3 2 4 3 7
Изход: изпълнява изискванията за зигзагообразна нагоре редица */

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