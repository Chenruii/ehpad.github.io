<?php
session_start();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');

// Redirect to the login page:
header('Location: index.php');
?>
