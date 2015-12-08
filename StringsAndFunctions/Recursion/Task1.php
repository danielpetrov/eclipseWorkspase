<?php
/* Задача 1:
Да се състави програма, която изчислява
N-тото числона Фибоначи.
Първото и второто число на Фибоначи са 1-ци, всяко следващо е равно
на сбора на предходните 2.
Пример: 8
Изход: 21
Първите 5 числа на Фибоначи са : 1, 1, 2, 3, 5, 8, 13, 21 */


$n = 31;
$memo = [];

$counterForCalls = 0;
echo fibionacci($n, $counterForCalls) . PHP_EOL;
echo $counterForCalls . PHP_EOL;

$counterForCalls = 0;
echo fibionacciImproved($n, $memo, $counterForCalls) . PHP_EOL;
echo $counterForCalls . PHP_EOL;

function fibionacci($n, &$counterForCalls){
	$counterForCalls++;
	
	if ($n == 0 || $n == 1) {
		return $n;
	}
	
	return fibionacci($n - 1, $counterForCalls) + fibionacci($n - 2, $counterForCalls);
}

function fibionacciImproved($n,  &$memo, &$counterForCalls){
	
	$counterForCalls++;
	
	if (array_key_exists($n, $memo)){
		return $memo[$n];
	} 
		
	if ($n == 0 || $n == 1) {
		return $n;
	}
	
	$memo[$n] = fibionacciImproved($n - 1,  $memo, $counterForCalls) + fibionacciImproved($n - 2,  $memo, $counterForCalls);

	return $memo[$n];
}