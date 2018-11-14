Question 1: Parmi les variables suivantes, lesquelles ont un nom valide : 
mavar: non valide , 
$mavar: valide 
$var5: valide 
$_ mavar: valide
$_5var: non valide
$__élément1: valide
$hotel4*: non valide

Question 2 : Donnez les valeurs de $x, $y, $z à la fin du script suivant :
$x="PostgreSQL"; 
$y="MySQL"; 
$z=&$x; 
$x="PHP 5";
$y=&$x;

=> echo $x, $y , $z 
	$x=PHP 5
	$y=PHP 5
	$z= PHP 5
	
// 3- Lisez les valeurs des variables du script de la question 2 à l’aide du tableau $GLOBALS.
 echo $GLOBALS['x'] ."<br>" . $GLOBALS['y'] ."<br>" $GLOBALS['x'] ; 
 
4- Donnez la valeur des variables $x, $y, $z à la fin du script :
$x="7 personnes"; 
$y=(integer) $x; 
$x="9E3"; 
$z=(double) $x;

=> $x: 9E3
	$y : 7
	$z: 9000