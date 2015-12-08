<?php
/**
 * Save humans, destroy zombies!
 **/

define("GameWidth", 16000);
define("GameHeigth", 9000);
define("ZombieMoveUnits", 400);
define("HeroMoveUnits", 1000);
define("HeroAttackRange", 2000);
define("HeroAttackRangeOffset", 3);
define("ZombieAttackRangeOffset", 3);
/* The order in which actions happens in between two rounds is:

Zombies move towards their targets.
Ash moves towards his target.
Any zombie within a 2000 unit range around Ash is destroyed.
Zombies eat any human they share coordinates with. */

// game loop
while (TRUE)
{
    $allHumans = [];
    $allZombies = [];
    
    fscanf(STDIN, "%d %d",
        $currentHeroX,
        $currentHeroY
    );
    fscanf(STDIN, "%d",
        $humanCount
    );
    for ($i = 0; $i < $humanCount; $i++)
    {
        fscanf(STDIN, "%d %d %d",
            $humanId,
            $humanX,
            $humanY
        );
        
        $allHumans[$i] = [
            "humanID" => $humanId,
            "humanX" => $humanX,
            "humanY" => $humanY
            ];
    }
    fscanf(STDIN, "%d",
        $zombieCount
    );
    
    $closestZombieToHero;
    $smallestDistanceBetweenZombieAndHero = 50000;
    $mostThreatenedHuman;
    $smallestDistanceBetweenZombieAndMostThreatenedHuman = 50000;
    $zombieThatTreatesMostTreatenedHuman;
    
    for ($i = 0; $i < $zombieCount; $i++)
    {
    	fscanf(STDIN, "%d %d %d %d %d",
            $zombieId,
            $zombieX,
            $zombieY,
            $zombieXNext,
            $zombieYNext
    		//TODO find zombie that treatens human most
        );
        
    	$allZombies[$i] = [
            'zombieId' => $zombieId,
            'zombieX' => $zombieX,
            'zombieY' => $zombieY,
            'zombieXNext' => $zombieXNext,
            'zombieYNext' => $zombieYNext
            ];
    	
    }
    
    foreach ($allZombies as $zombeyKey => $zombie) {
    	//find closest zombie to hero
	    $distanceBetweenZombieIAndHero = calculateDistance($currentHeroX, $zombie['zombieX'], $currentHeroY, $zombie['zombieY']);
		    if ($distanceBetweenZombieIAndHero < $smallestDistanceBetweenZombieAndHero) {
		    	$smallestDistanceBetweenZombieAndHero = $distanceBetweenZombieIAndHero;
		    	$closestZombieToHero = $allZombies[$zombeyKey];
		    };
	    
	    	foreach ($allHumans as $humanKey => $human) {
	    	//find most treatened human
	    	$distanceBetweenZombieAndHuman = calculateDistance($human['humanX'], $zombie['zombieX'], $human['humanY'], $zombie['zombieY']);
		    	if ($distanceBetweenZombieAndHuman < $smallestDistanceBetweenZombieAndMostThreatenedHuman) {
		    		$smallestDistanceBetweenZombieAndMostThreatenedHuman = $distanceBetweenZombieAndHuman;
		    		$mostThreatenedHuman = $allHumans[$humanKey];
		    		$zombieThatTreatesMostTreatenedHuman = $allZombies[$zombeyKey];
		    	};
	    	}
    }
    
    
    //destination
    //TODO - can save most treatened human - go there
    //TODO - can kill closest zombie and save most treatened human - go to closest zombie, else to most treatened human
    //TODO - next tactic, permute all variants to save humans and see what is best?
    $canSaveHuman = canSaveHuman($zombieThatTreatesMostTreatenedHuman, $mostThreatenedHuman, $currentHeroX, $currentHeroY);
    if ($canSaveHuman) {
    	$moveToXCoord = $zombieThatTreatesMostTreatenedHuman['zombieX'];
    	$moveToYCoord = $zombieThatTreatesMostTreatenedHuman['zombieY'];
    }
    
    echo("$moveToXCoord $moveToYCoord\n"); // Your destination coordinates
}

function calculateDistance($x1, $x2, $y1, $y2){
	return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
}

function calculateZombieStep($now, $next){
	return abs($now - $next);
}

function canSaveHuman($zombie, $human, $currentHeroX, $currentHeroY){
	$distanceBetweenZombieAndHuman = calculateDistance(
			$human['humanX'], 
			$zombie['zombieX'], 
			$human['humanY'], 
			$zombie['zombieY']);
	
	$distanceBetweenZombieIAndHeroOuterShootRange = calculateDistance(
			$currentHeroX, 
			$zombie['zombieX'], 
			$currentHeroY, 
			$zombie['zombieY']) 
	- HeroAttackRange 
	+ HeroAttackRangeOffset;

	$roundsForZombieToReachHuman = (int)($distanceBetweenZombieAndHuman/ ZombieMoveUnits);//offset
	$roundsForHeroToSaveHuman = (int)($distanceBetweenZombieIAndHero/ HeroMoveUnits);

	return $roundsForHeroToSaveHuman <= $roundsForZombieToReachHuman ? TRUE : FALSE;
}
?>