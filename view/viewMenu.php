<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Nom Chef</th>
        <th>Date Menu</th>
        <th>Entre</th>
        <th>Plat</th>
        <th>Dessert</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM menu ORDER BY id DESC';
    foreach ($pdo->query($sql) as $row) {
        echo '<tr>';
        echo '<td>' . $row['nameChief'] . '</td>';
        echo '<td>' . $row['dateMenu'] . '</td>';
        echo '<td>' . $row['nameEntre'] . '</td>';
        echo '<td>' . $row['nameFlat'] . '</td>';
        echo '<td>' . $row['nameDessert'] . '</td>';
        echo '<td>';
        echo '<a href="menu.php?id=' . $row['id'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="editMenu.php?id=' . $row['id'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="deleteMenu.php?id=' . $row['id'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo '</td>';
        echo '</tr>';
    }
    Database::disconnect();
    ?>

    </tbody>
</table>