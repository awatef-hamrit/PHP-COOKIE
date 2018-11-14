//Exercice 1:
<?php
$str="Transformez une chaîne écrite dans des casses différentes afin que chaque mot ait une initiale en majuscule."; 
echo ucwords(strtolower($str));    


//Exercice 2: 
$str2 = "awatef";  
for($i=0;$i<strlen($str2);$i++) 
{
    echo " $str2[$i]<br>";
}



//Exercice3

$str3="awatef";
$str4="hamrit";

if($str3<$str4){ 
    echo "$str3. puis.$str4";
}
else{
    echo "$str4.puis.$str3";
}
?>