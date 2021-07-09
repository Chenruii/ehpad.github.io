<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM user ORDER BY id DESC';
    foreach ($pdo->query($sql) as $row) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['role'] . '</td>';
        echo '<td>';
        echo '<a href="./view/viewUser.php?id=' . $row['name'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="editUser.php?id=' . $row['name'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="deleteUser.php?id=' . $row['name'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo '</td>';
        echo '</tr>';
    }
    Database::disconnect();
    ?>

    </tbody>
</table>