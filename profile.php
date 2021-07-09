<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
$dbHost = 'localhost';
$dbName = 'blogehpad';
$dbUsername = 'root';
$dbPassword = 'root';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_error()) {
    exit('Connection echoué: ' . mysqli_connect_error());
}

$stmt = $conn->prepare('SELECT password, email FROM user WHERE id = ?');
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

