<?php
require 'database.php';

if (!empty($_POST)) {
// Saisie des erreurs de validation
    $nameError = null;
    $emailError = null;
    $roleError = null;

// Saisie des valeurs d‘entrée
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

// Valider Engages
    $valid = true;
    if (empty($name)) {
        $nameError = 'Veuillez entrer un nom';
        $valid = incorrect;
    }

    if (empty($email)) {
        $emailError = 'Veuillez entrer une adresse email';
        $valid = incorrect;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Veuillez entrer une adresse email valide';
        $valid = incorrect;
    }

    if (empty($role)) {
        $roleError = 'Veuillez entrer son role';
        $valid = incorrect;
    }

// Entrer des données
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $q = $pdo->prepare("INSERT INTO user (name,email,role) VALUES (:name, :email,:role)");
        $q->execute(array($name, $email, $role));
        Database::disconnect();
        header("Location: dashboard.php");
    }
}
?>