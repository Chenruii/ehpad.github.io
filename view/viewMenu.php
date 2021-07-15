<section class="u-align-left u-clearfix u-image u-section-1" id="carousel_b562" data-image-width="150"
         data-image-height="100">
    <?php
    $sql = 'SELECT  nameEntre, nameFlat, nameDessert FROM menu ';
    $req = mysqli_query($sql) or die('Erreur Sql' . $sql . mysqli_error());
    ?>

    <?php
    while ($data = mysqli_fetch_array($req)){
    ?>
    <h6 class="u-text u-text-1">Notre chef</h6>
    <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h6 class="u-text u-text-2">Entrée</h6>
                    <p class="u-text u-text-3"><?php $data['nameEntre'] ?></p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h6 class="u-text u-text-4">Plat</h6>
                    <p class="u-text u-text-5"><?php $data['namePlat'] ?></p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h6 class="u-text u-text-6">dessert</h6>
                    <p class="u-text u-text-7"><?php $data['nameDessert'] ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</section>