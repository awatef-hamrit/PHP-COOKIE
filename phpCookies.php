<?php

if (!isset($_COOKIE['test'])){
  
    setcookie('test', 'testCheckPhp', time() + 60); 
    $stylesheet = 'default'; 
}elseif (isset($_COOKIE['test'])){
    $stylesheet = 'special'; 
   
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php cookies</title>
    

    <link href="<?php echo "$stylesheet.css"; ?>" rel="stylesheet" type="text/css">

</head>
<body>

<p style="text-justify: center">

    <h3><?php echo "la , on applique l css: $stylesheet.css"; ?></h3>
    Écrire un script PHP qui crée une page HTML simple, avec un titre et un peu de texte. 
    <br>
Créer deux fichiers CSS pour cette page, defaut.css et special.css, qui donnent des rendus très différents
    <br>
En utilisant les cookies, faire en sorte que le CSS utilisé soit defaut.css lors de la première visite d'un·e internaute,
<br>
t special.css si l'internaute a déjà visité la page il y a moins d'un an.
<br>
Modifier le code précédent, pour que le site ne se souvienne de l'internaute que pendant une minute.

   

</p>

</body>
</html>