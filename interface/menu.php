<!--?php include 'head.php'; ?>

<!?php include 'banner2.php'; ?>

<!__?php
require 'database.php';

$req =
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
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
while ($donnees =$sql->fetch()){ ?><!?php  } ?-->

<section class="menu">
    <h1>PLAT DU JOUR</h1>
    <h6 class="nomChef" id="nomchef"></h6>
    <div class="entree">
        <h2>Entrée</h2>
        <p class="nomEntre"> <!--?php  echo $donne['nameEntre']; ?-->Reid’s Orchard Pears / Bitter Greens / Granola /
            Big Firefly / Farms Black and Blue / Pine Nut Vinaigrette</p>
    </div>
    <div class="plat">
        <h2>Plat</h2>
        <p class="nomPlat">Adriatic Seafood Soup / Clams / Prawns / Livornese / Langoustine Scallop / Celery / Olive</p>
    </div>
    <div class="dessert">
        <h3>Dessert</h3>
        <p class="nomDessert">Honey Vinaigrette / House Cheese Crouton / Fine Herbs</p>
    </div>
</section>







