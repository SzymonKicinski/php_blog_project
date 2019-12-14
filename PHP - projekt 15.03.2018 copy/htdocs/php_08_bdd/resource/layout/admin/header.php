<?php
/*
session_start();
if ((!isset($_SESSION['zalogowany'])))
{
    header('Location: login.php');
    exit();
}
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php ?></title>
    <meta charset="utf-8">
    <title>Dr PC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='resource/js/myscript.js'></script>
    <link rel="stylesheet" href="resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="resource/css/admin.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resource/js/slick.css"/>
    <link rel="stylesheet" type="text/css" href="resource/css/style.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="resource/js/slick.min.js"></script>
    <script type="text/javascript" src="resource/js/script.js"></script>
    <script type="text/javascript" src="resource/js/jquery.scrollTo.min.js"></script>

    <script>

        jQuery(function ($)
            {
                $.scrollTo(0);
                $('#id_newsletter').click(function () { $.scrollTo($('#newsletter'), 1000 ); });
                $('#id_contac_us').click(function () { $.scrollTo($('#contac_us'), 1000 ); });
            }
        );
    </script>
</head>
<body>
<header>
    <div class="container-fluid" id="header-content">
        <div class="col-md-12 col-sm-12 col-xs-12" id="top-navigation" style="float: left;">
            <a href="index.php"><p><i class="fa fa-tachometer"></i> Przejd� do strony</p></a>
            <a href="scripts/auth/logout.php"><p><i class="fa fa-envelope"></i>Wyloguj</p></a>
        </div>
    </div>

</header>