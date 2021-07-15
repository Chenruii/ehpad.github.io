<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
    <?php include 'head.php'; ?>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Ajouter un utilisateur</h2>

                <form class="form-horizontal" action="create.php" method="post">
                    <div class="form-group <?php echo !empty($nameError) ? 'has-error' : ''; ?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text" placeholder="Name"
                                   value="<?php echo !empty($name) ? $name : ''; ?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group <?php echo !empty($emailError) ? 'has-error' : ''; ?>">
                        <label class="control-label">E-Mail-Adresse</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="E-Mail-Adresse"
                                   value="<?php echo !empty($email) ? $email : ''; ?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group <?php echo !empty($roleError) ? 'has-error' : ''; ?>">
                        <label class="control-label">Role</label>
                        <div class="controls">
                            <input name="role" type="text" placeholder="role"
                                   value="<?php echo !empty($role) ? $role : ''; ?>">
                            <?php if (!empty($roleError)): ?>
                                <span class="help-inline"><?php echo $roleError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" class="btn btn-success" value="Créer un nouveau utilisateur">
                        <a class="btn" href="dashboard.php">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>