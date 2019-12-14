<?php
if (!isset($_GET['token'])) {
    header('Location : ../../error.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resetuj hasło</title>
    <script type='text/javascript' src='../../resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='../../resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../../resource/js/myscript.js'></script>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../resource/css/login.css">
</head>
<body>
<div class="container-fluid" id="login-form-views">
    <div class="container">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12" id="form-box">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div id="logo">
                    <img src="../../resource/images/logo.png" alt="BrakObrazka">
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12" id="login-form">
                <?php
                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger text-center" role="alert">Haslo nie zostalo zmienione</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success text-center" role="alert">Hasło zostalo zmienione.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "email") {
                    echo '<div class="alert alert-success text-center" role="alert">Email nie jest powiązany z użytkownikiem.</div>';
                }
                ?>
                <form method="post" action="../../scripts/auth/set.php">
                    <p>
                        <input name="password" class="form-control" type="text" placeholder="Nowe hasło"/>
                    </p>
                    <div class="col-md-12 col-sm-12 col-xs-12" id="form-result"></div>
                    <input type="hidden" value="<?php echo $_GET['token']; ?>" name="token">
                    <p>
                        <input type="submit" class="btn btn-primary pull-right" value="Ustaw" id="form-action">
                    </p>
                </form>
                <div class='col-md-12 text-center'>
                    <a href="../../admin/auth/login.php">Wróć do logowania</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>