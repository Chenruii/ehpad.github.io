<body class="loggedin">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Ehpad</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a href="dashboard.php"
                                                            class="nav-link active fas fa-user-circle ">Profil</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="activity.php">Activité</a></li>
                <li class="nav-item" role="presentation"><a href="dashboard.php?logout=true" class="nav-link">Déconnecter</a>
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
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>

