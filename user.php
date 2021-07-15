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
<?php
require 'database.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: dashboard.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>voir un utilisateurr</h3>
        </div>

        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Nom</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['name']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email </label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['email']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Role</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['role']; ?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn" href="index.php">Retour</a>
            </div>


        </div>
    </div>

</div> <!-- /container -->
</body>
</html>