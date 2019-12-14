<?php require_once('../scripts/bootstrap.php');
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
    <script type='text/javascript' src='{$conf->app_url}/resource/js/ckeditor/ckeditor.js'></script>
    <script type='text/javascript' src='{$conf->app_url}/resource/js/myscript.js'></script>>
    <link rel="stylesheet" href="{$conf->app_url}/resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/../../resource/css/layout.css">
    <title>DR PC</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/../../resource/js/slick.css"/>
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
<body>
<header id="top" class="header">
    <nav class="site-nav">
        <div class="container">
            <div style="float: left;padding-top: 15px; padding-right: 100px; padding-left: 100px; ">
                <a class="link logo" href="{$conf->app_url}/../../index.php">DR PC</a>
            </div>


            <?php
            $pages = $database->select('page');
            if ($pages->num_rows > 0) {
                while ($row = $pages->fetch_assoc()):
                    ?>

                    <p style="padding-top: 20px; padding-left:10px; " >
                        <a   href="ctrl.php?action=postsOpenSingle1&id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>                                    </a>

                    </p>
                    <?php
                endwhile;
            } else {
            }
            ?>
            <div style="float: left">
                <ul class="list">



                    <div style="float: left;padding-top: 15px; padding-left: 150px; padding-right: 15px;"> <li >
                            <a  href="{$conf->app_url}/../../index.php" class="link">Home</a>
                        </li></div>

                    <div style="float: left;padding: 15px;"><li >
                            <a href="../admin/dashboard/index.php" class="link login">Accounts</a>
                        </li></div>

                    <div style="float: left;padding: 15px;"><li >
                            <a id="id_newsletter" href="#" class="link">Newsletter</a>
                        </li></div>

                    <div style="float: left;padding: 15px;"> <li >

                        </li></div>
                </ul>

            </div>

            <div style="clear: both"></div>
        </div>

    </nav>

    <div class="go-top">
        <a class="icon-up" href="#top">Go top</a>
    </div>

</header>