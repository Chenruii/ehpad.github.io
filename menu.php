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
        echo '<a href="menu.php?id=' . $row['id'] . '" class="mr-3" title="Voir Utilisateur" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="editMenu.php?id=' . $row['id'] . '" class="mr-3" title="Modifier utilisateur" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
        echo '<a href="deleteMenu.php?id=' . $row['id'] . '" title="Supprimer utilisateur" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo '</td>';
        echo '</tr>';
    }
    Database::disconnect();
    ?>

    </tbody>
</table>
</body>
</html>


<section class="u-align-left u-clearfix u-image u-section-1" id="carousel_b562" data-image-width="150"
         data-image-height="100">
    <h6 class="u-text u-text-1">Notre chef</h6>
    <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <li>  <?php echo $i; ?> </li>
            <?php } ?>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h6 class="u-text u-text-2">Entrée</h6>
                    <p class="u-text u-text-3">Reid’s Orchard Pears / Bitter Greens / Granola / Big Firefly / Farms
                        Black and Blue / Pine Nut Vinaigrette</p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h6 class="u-text u-text-4">Plat</h6>
                    <p class="u-text u-text-5">Adriatic Seafood Soup / Clams / Prawns / Livornese / Langoustine Scallop
                        / Celery / Olive</p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h6 class="u-text u-text-6">dessert</h6>
                    <p class="u-text u-text-7">Honey Vinaigrette / House Cheese Crouton / Fine Herbs</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>