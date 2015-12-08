<?php
$queue = [];

function enqueue($entry){
	global $queue;
	
	return array_push($queue, $entry);
}

function dequeue(){
	global $queue;
	
	return array_shift($queue);
}