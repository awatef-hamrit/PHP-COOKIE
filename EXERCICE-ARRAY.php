<?php
//Créez un tableau d’entiers variant de 1 à 63. 
//	LE tableau contiendra autant de cases que vous voulez.
$tab=range(0,63); 


//	Ensuite, à partir de celui-ci, créer un autre tableau de
//		nombres variant de 0 à 6.3
foreach($tab as $ind=>$val)
{
$tab[$ind]=$tab[$ind]/10;
}

//Enfin, créez un tableau associatif dont les clés X varient de 0 à 6.3 
//	et dont les valeurs sont sin(X).
foreach($tab as $ind=>$val)
{
$val= (string) $val;
$tabsin[$val]= sin($val);
}

//Affichez le tableau de valeurs dans un tableau HTML.

echo "<table>";
foreach($tabsin as $cle=>$val)
{
	echo "<tr><td>$cle</td> <td>$val</td></tr>";
	
}
echo "</table>";