<?php include 'head.php'; ?>
<?php include 'banner2.php'; ?>
<?php
session_start();
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == true) {
        session_unset();
        header("location:login.php");
    }
} else if ($_SESSION['name'] !== "") {
    $user = $_SESSION['name'];
    // afficher un message
    echo "<br>Bonjour $user, vous êtes connectés";
}
?>

<main class="page">
    </div>
    <section class="clean-block clean-dashboard dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Gestion</h2>
                <?php echo '<script src="js/script.js"></script>'; ?>
                <div>
                    <span id="#ville">Ville<br> </span>
                    <span class="#tooltip">Saisir une autre ville<br> </span>
                </div>
                <div>
                    <div class="u-container-layout u-container-layout-2">
                                <span id="#temp">°C  <span id="#condition"> </span>
                    </div>
                    <div
                    ">
                    <span id="temp_min">°C </span>
                    <span id="temp_max">°C </span>
                </div>
            </div>
            <?php
            echo '<h2>Paris</h2><br />';
            $jour = getdate();
            $semaine = array(" Dimanche ", " Lundi ", " Mardi ", " Mercredi ", " Jeudi ", " Vendredi ", " Samedis ");
            $mois = array(1 => " Janvier ", " Février ", " Mars ", " Avril ", " Mai ", " Juin ", " Juillet ", " Août ", " Septembre ", "Octobre ", "Novembre ", "Décembre ");
            echo $semaine[date('w')], " ", date('j'), " ", $mois[date('n')], date('Y'), "<br />";
            ?>
            <?php include 'horloge.xml'; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Details des Utilisateur</h2>
                    <a href="registerUser.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Ajouter des
                        nouveaux utilisateurs</a>
                    <?php
                    // Include config file
                    require_once "./view/viewUser.php";
                    ?>
                </div>
                <h2>Profile Page</h2>
                <div>
                    <p>Detail de votre compte</p>
                    <div class="col-6">
                        <p>votre nom utilisateur :<?= $_SESSION['name']; ?></p>
                    </div>
                </div>
                <?php
                ?>
            </div>
        </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>


