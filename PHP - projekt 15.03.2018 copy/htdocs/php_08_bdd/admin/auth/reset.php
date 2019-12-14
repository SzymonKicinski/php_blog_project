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
                    echo '<div class="alert alert-danger text-center" role="alert">Wprowadź poprawny email.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-danger text-center" role="alert">Na podany email otrzymałeś wiadomość.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "email") {
                    echo '<div class="alert alert-success text-center" role="alert">Email nie jest powiązany z użytkownikiem.</div>';
                }
                ?>
                <form method="post" action="../../scripts/auth/reset.php">
                    <p>
                        <input name="email" class="form-control" type="email" placeholder="Adres email"/>
                    </p>
                    <div class="col-md-12 col-sm-12 col-xs-12" id="form-result"></div>
                    <p>
                        <input type="submit" class="btn btn-primary pull-right" value="Zresetuj" id="form-action">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>