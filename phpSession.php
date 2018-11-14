
<?php
session_start();

// Ajouter à la page un bouton ou un lien qui permet de remettre le compteur à zéro.
if(isset($_POST['btn'])){
    session_destroy();
    header('location: debut.html');
    exit();
}
// En utilisant les sessions PHP, écrire un script qui crée une page HTML indiquant le nombre de visites de l'internaute,

if (!isset($_SESSION['n'])){
    $_SESSION['n'] =1; 
}elseif (isset($_SESSION['n'])){
    $_SESSION['n'] ++; 
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> php-session </title>
</head>
<body>

<?php

        echo "visite num " .$_SESSION['n'];
 

?>
//btn to refresh the page
<form action="" method="post">
    <button name="ref" type="submit" >refresh</button>
</form>

//btn remettre l compteur a 0
<form action="" method="post">
    <button name="btn" type="submit">reset</button>
</form>
<?php

?>
</body>
</html>