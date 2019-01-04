<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 14:26
 */

session_start();

$login = $_POST['login'];
$mdp = $_POST['mdp'];

setcookie('login', $login, time()+ 365*24*3600, null, null, false, true);
setcookie('motDePasse', $mdp, time()+ 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Nom :</h3><?php echo $_SESSION['nom']; ?>
<h3>Prénom :</h3><?php echo $_SESSION['prenom']; ?>
<h3>Age :</h3><?php echo $_SESSION['age']; ?>

<a href="cookiesmodif.php">Lien</a>
</body>
</html>