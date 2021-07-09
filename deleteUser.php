<?php
require 'database.php';
$id = 0;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM user  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: index.php");

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5 mb-3">Supprimer utilisateur</h2>
                <form class="form-horizontal" action="deleteUser.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <p class="alert alert-error">Êtes vous sure de supprimer cet utilisateur</p>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">OUI</button>
                        <a class="btn" href="index.php">No</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>