<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 13:50
 */


session_start();
$_SESSION['agent'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['IP'] = $_SERVER['SERVER_ADDR'];
$_SESSION['server'] = $_SERVER['SERVER_NAME'];
$_SESSION['nom'] = 'Soudain';
$_SESSION['prenom'] = 'Florence';
$_SESSION['age'] = '33';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h4>Votre User Agent : </h4><span><?php echo $_SESSION['agent']; ?></span>
    <h4>Votre Adresse IP : </h4><span><?php echo $_SESSION['IP']; ?></span>
    <h4>Nom du Serveur : </h4><span><?php echo $_SESSION['server']; ?></span>
    <br><br>
    <a href="page1.php">Lien</a>
    <br><br>
<form action="page1.php" method="post">
    <label for="login">Login</label>
    <input type="text" name="login">
    <label for="mdp">Mot de passe</label>
    <input type="text" name="mdp">
    <input type="submit">

</form>
</body>
</html>