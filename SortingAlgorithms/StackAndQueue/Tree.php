<?php
$tree = [
		[
	'hasParrent' => 3,
	'value' => 2,
	'tree' => [ 
			[
			'hasParrent' => true,
			'value' => 1,
			'tree' => [
					'hasParrent' => true,
					'value' => 0,
					'tree' => [],
					'childCount' => 0
					],
			'childCount' => 1
			],
			
			[
			'hasParrent' => true,
			'value' => 4,
			'tree' => [
					'hasParrent' => true,
					'value' => 3,
					'tree' => [],
					'childCount' => 0
					],
					[
					'hasParrent' => true,
					'value' => 5,
					'tree' => [],
					'childCount' => 0
					]
			],
			'childCount' => 2
			
	],
	'childCount' => 2
		]		
];

//var_dump($tree['hasParrent']);
var_dump($tree[0][$hasParrent]);
//walkInTree($tree[0]);

function walkInTree($tree){

	echo $tree[$i]['value'];
	
	if ($tree[$i]['childCount'] == 0) {//$childCount == 0?
		return;
	}
	
	for ($i = 0; $i < $tree[$i]['childCount']; $i++) {
		walkInTree($tree[$i]['tree'], $i);
	}
}
