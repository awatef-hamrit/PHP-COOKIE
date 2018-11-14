<?php
function angle($angl, $unite){
    switch($unite)
    {
		// to lowerCase UNITE ******
        case "R" || "r": 
        
            return "res: ". sin($angl); 
            break;
        case "D" || "d":
        
            return "res: ".sin($angl * 3.14 / 180);
            break;
        case "G" || "g":
        
            return  "res: ".sin($angl * 180 / 3.14);
            break;
    }
}


echo angle(.45,r),"<br />"; 
echo angle(45,D),"<br />"; 
echo angle(.45,g),"<br />";

