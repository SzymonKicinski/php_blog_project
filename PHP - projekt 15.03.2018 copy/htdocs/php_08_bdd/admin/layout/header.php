<?php require_once('/../../scripts/bootstrap.php');
 require_once('/../../scripts/bootstrap/database.php');
require_once ('/../../init.php');
?>

<?php
if(!$session->checkSession()) {
    header('Location: ../auth/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php ?></title>
    <meta charset="UTF-8">
    <title>Dr PC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='{$conf->app_url}//resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/ckeditor/ckeditor.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/myscript.js'></script>
    <link rel="stylesheet" href="{$conf->app_url}/resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/../../resource/css/layout.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/js/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/css/style.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/../../resource/js/slick.min.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/../../resource/js/scripts.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/../../resource/js/jquery.scrollTo.min.js"></script>

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
<header>
    <div class="container-fluid" id="header-content">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12" style="height: 130px !important;">
                <div >

                </div>
            </div>
        </div>
    </div>
</header>
