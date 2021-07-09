<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier utilisateur</title>
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
                <h2 class="mt-5">Modifier utilisateur</h2>
                <form class="form-horizontal" action="update.php?id=<?php echo $id ?>" method="post">
                    <div class="control-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <input name="name" type="text" placeholder="Name"
                                   value="<?php echo !empty($name) ? $name : ''; ?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group <?php echo !empty($emailError) ? 'error' : ''; ?>">
                        <label class="control-label">Email </label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email Address"
                                   value="<?php echo !empty($email) ? $email : ''; ?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Modifier</button>
                        <a class="btn" href="index.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

