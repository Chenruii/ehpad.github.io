<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Nom d'activité</th>
        <th>Heure</th>
        <th>Lieu</th>
        <th>Date activite</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM activity ORDER BY id DESC';
    foreach ($pdo->query($sql) as $row) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['heureActivity'] . '</td>';
        echo '<td>' . $row['location'] . '</td>';
        echo '<td>' . $row['dateActivity'] . '</td>';
        echo '<td>';
        echo '<a href="user.php?id=' . $row['name'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="editUser.php?id=' . $row['name'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="deleteUser.php?id=' . $row['name'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo '</td>';
        echo '</tr>';
    }
    Database::disconnect();
    ?>

    </tbody>
</table>