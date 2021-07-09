<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style> .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
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
        echo '<a href="user.php?id=' . $row['name'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="editUser.php?id=' . $row['name'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="deleteUser.php?id=' . $row['name'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo '</td>';
        echo '</tr>';
    }
    Database::disconnect();
    ?>

    </tbody>
</table>
</body>
</html>

<section class="u-clearfix u-image u-section-3" id="sec-3048" data-image-width="1280" data-image-height="853">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">Intitule activite</h1>
        <h2 class="u-align-center u-text u-text-default u-text-2">heure<br>
            <br>lieu activite
        </h2>
        <img class="u-image u-image-default u-image-1"
             src="images/bada19ff7f6bca25508df4cf4f3cd823ad16100d9f9dd06804982fdab0da01e145eb188b3b7b664b31972229eb7870aa5c83a2570191ea41ed4809_1280.png"
             alt="" data-image-width="1280" data-image-height="1103">
    </div>
</section>