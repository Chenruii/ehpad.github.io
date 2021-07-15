<?php
include 'database.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM menu ORDER BY id DESC';
foreach ($pdo->query($sql) as $row) {
    echo '<div class="menu">';
    echo '<p>' . $row['nameChief'] . '</p>';
    echo '<p>' . $row['dateMenu'] . '</p>';
    echo '<p>' . $row['nameEntre'] . '</p>';
    echo '<p>' . $row['nameFlat'] . '</p>';
    echo '<p>' . $row['nameDessert'] . '</p>';
    echo '<div>';
    echo '<a href="menu.php?id=' . $row['id'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
    echo '<a href="editMenu.php?id=' . $row['id'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
    echo '<a href="deleteMenu.php?id=' . $row['id'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
    echo '<p>';
    echo '</p>';
}
Database::disconnect();
?>
