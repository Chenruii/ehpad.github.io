<?php
session_start();
if (isset($_POST['name']) && isset($_POST['password'])) {
    $dbHost = 'localhost';
    $dbName = 'blogehpad';
    $dbUsername = 'root';
    $dbPassword = 'root';

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName) or die('Connection echoué');

    $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));

    if ($name !== "" && $password !== "") {
        $req = "SELECT count(*) FROM user where name = '" . $name . "' and password = '" . $password . "' ";
        $exec_req = mysqli_query($conn, $req);
        $reponse = mysqli_fetch_array($exec_req);
        $count = $reponse['count(*)'];

        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['name'] = $name;
            header('Location: dashboard.php');
        } else {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: login.php');
}
mysqli_close($conn); // fermer la connexion
