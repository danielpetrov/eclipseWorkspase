<?php
/* Задача 8:
Напишете програма, която намира и извежда най-дългата редица от
еднакви поредни елементи в даден масив. */

$exampleArray = [2,1,1,2,3,3,2,2,2,1];

$exampleArrayLength = count($exampleArray);

$counterForEqualNumbers = 1;

$maxEqualNumbersLength = 0;

for ($i = 0; $i < $exampleArrayLength - 1; $i++) {
	
	if ($exampleArray[$i] == $exampleArray[$i + 1]) {
		$counterForEqualNumbers++;
	} else{
		/// finds the first occurence of longest subsequence of equal numbers
		/// >= to find the last occurence...
		if ($counterForEqualNumbers > $maxEqualNumbersLength) {
			$maxEqualNumbersLength = $counterForEqualNumbers;
			$startingIndexOfLongestSequence = $i - $maxEqualNumbersLength + 1;
		}
		$counterForEqualNumbers = 1;
	}
}

$longestSubsequenceOfEqualNumbers = [];

for ($i = $startingIndexOfLongestSequence; 
	 $i < $maxEqualNumbersLength + $startingIndexOfLongestSequence;) {
	$longestSubsequenceOfEqualNumbers[] = $exampleArray[$i++];
}

print_r($longestSubsequenceOfEqualNumbers);