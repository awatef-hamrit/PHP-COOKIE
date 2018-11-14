<?php
function parite ($tabEntree, $tabPair, $tabImpair){ 
$tabImpair=[];
$tabPair=[];
    foreach ($tabEntree as $x){  
        if ($x%2===0) {
           array_push( $tabPair ,$x);
		}			
		else {
			array_push($tabImpair,$x);  
		
    }
	}
    print_r($tabEntree);  
	
	echo"<br> Res Tab Pair";
    print_r($tabPair);  

	echo"<br> Res Tab Impair";
    print_r($tabImpair);  

	}
 parite([12,15,0,5],[],[]);
 