<?php include 'head.php'; ?>
<?php include 'banner.php'; ?>
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">S'inscrire</h2>
            </div>
            <form>
                <div class="form-group"><label for="name">Nom</label><input class="form-control item" type="text"
                                                                            id="name"></div>
                <div class="form-group"><label for="password">Mot de passe</label><input class="form-control item"
                                                                                         type="password" id="password">
                </div>
                <div class="form-group"><label for="email">Email</label><input class="form-control item" type="text"
                                                                               id="email"></div>
                <button class="btn btn-primary btn-block" type="submit">S'inscrire</button>
            </form>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>
