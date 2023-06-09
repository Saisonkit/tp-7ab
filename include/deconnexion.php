<?php
session_start();
// Détruire la variable de session.
unset($_SESSION['login']);
unset($_SESSION['login']['username']);
unset($_SESSION['login']['password']);
// Détruire les autres variables de session.
session_destroy();
// Rediriger vers la page d'accueil.
header("location:../index.php");
?>