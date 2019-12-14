<?php
include_once '/scripts/bootstrap/database.php';
include_once '/scripts/bootstrap.php';
include_once '/lib/smarty/Smarty.class.php';
$smarty= new Smarty;

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <title>Dr PC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='{$conf->app_url}/resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/myscript.js'></script>
    <link rel="stylesheet" href="{$conf->app_url}/resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/resource/css/layout.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/js/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/css/style.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/resource/js/slick.min.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/resource/js/script.js"></script>
    <script type="text/javascript" src="{$conf->app_url}/resource/js/jquery.scrollTo.min.js"></script>
</head>
<body>
<header>
    <?php include 'resource/layout/header.php' ?>
</header>

<section>
    <div class="container-fluid" id="middle-content">
        <div class="container" id="middle-background" >
            <div class="col-md-12 col-sm-12 col-xs-12" id="blog-content" style="color: white">

                <?php
                $id = $_GET['id'];
                $page = $database->getObject('page', 'id', $id);
                if ($page->num_rows > 0) {
                    while ($single = $page->fetch_assoc()) {
                        echo $single['content'];
                    }
                } else {

                }
                ?>
            </div>
        </div>
    </div>
</section>


<footer>
    <?php include 'resource/layout/footer.php'; ?>
</footer>

</body>
</html>
