<?php
function produit(...$produits){
	//num_args 
    $pro = 1;

    foreach($produits as $n){
        
        if ($n !== 0){
            $pro *= $n;
        }     
    }
    return  $pro;
}

 echo produit(6, 9, -5, 0, 2);