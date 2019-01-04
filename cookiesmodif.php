<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/01/2019
 * Time: 15:21
 */


setcookie('login', 'login modifié', time()+365*24*3600, null, null, false, true);
setcookie('motDePasse', 'mot de passe modifié', time()+ 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Login :</h3><?php echo $_COOKIE['login']; ?>
<h3>Mot de passe :</h3><?php echo $_COOKIE['motDePasse']; ?>
</body>
</html>