<?php
session_start();

if (isset($_SESSION['zalogowany'])) {
    header('Location: dashboard.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zaloguj się</title>
    <script type='text/javascript' src='../../resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='../../resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../../resource/js/myscript.js'></script>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../resource/css/login.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="resource/js/slick.min.js"></script>
    <script type="text/javascript" src="resource/js/script.js"></script>
</head>
<body>
<div class="hovereffect-10">
    <img  class="img-responsive">




    <div class="overlay">
        <div class="container-fluid" id="login-form-views">
            <div class="container">
                <div class="login-box" id="form-box">
                    <div class="glyphicon-log-in" id="login-form">
                        <form method="post" action="../../scripts/auth/login.php">
                            <pi>
                                <input name="login" class="form-control" type="text" placeholder="Login"/>
                            </pi>
                            <pi>
                                <input name="haslo" class="form-control" type="password" placeholder="Hasło"/>
                            </pi>

                                <input type="submit" class="login-btn" value="Zaloguj" id="form-action">

                            <pi class="forget-password">
                                <a href="reset.php">Nie pamiętasz hasła?</a>
                            </pi>

                                <a href="../../index.php" class="back-btn" id="form-back"  >Wróć</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p><a href="#"><i class="fa fa-twitter" style="color: #00cdac"></i></a>
        <a href="#"><i class="fa fa-facebook" style="color: #00cdac"></i></a>
        <a href="#"><i class="fa fa-instagram" style="color: #00cdac"></i></a>
        <a href="#"><i class="fa fa-dribbble" style="color: #00cdac"></i></a>
    </p>
</div>
</body>
</html>