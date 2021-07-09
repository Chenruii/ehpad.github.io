<?php include 'head.php'; ?>

    <main class="page login-page loggedin">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Se connecter</h2>
                </div>
                <form action="verif.php" method="post">
                    <!--div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div-->
                    <div class="form-group"><label for="name">Nom utilisatateur</label><input class="form-control item"
                                                                                              type="text" id="name"
                                                                                              name="name"></div>
                    <div class="form-group"><label for="password">Mot de passe</label><input class="form-control"
                                                                                             type="password"
                                                                                             id="password"
                                                                                             name="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label
                                    class="form-check-label" for="checkbox">Se Souvenir</label></div>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" id="submit" value="Connecter">
                    <?php
                    if (isset($_GET['erreur'])) {
                        $err = $_GET['erreur'];
                        if ($err == 1 || $err == 2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
            </div>

            </form>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>