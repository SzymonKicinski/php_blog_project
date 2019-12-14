<?php
if (!isset($_GET['id'])) {
    header('Location: error.php');
    exit();
}
require_once('scripts/bootstrap.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='resource/js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='resource/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='resource/js/myscript.js'></script>
    <link rel="stylesheet" href="resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="resource/css/layout.css">
</head>
<body>


<header>
    <?php include 'resource/layout/header.php' ?>
</header>
<section>
    <div class="container-fluid" id="middle-content">
        <div class="container" id="middle-background">
            <div class="col-md-9 col-sm-9 col-xs-12" id="blog-content">
                <?php

                $id = $_GET['id'];
                $single = $database->getObjectById('page', $id)->fetch_assoc();
                echo "<p class='single-post-title'>" . $single['title'] . "</p>";
                echo "<blockquote>" . $single['content'] . "</blockquote>   ";

                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger" role="alert">Komentarz nie został dodany.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success" role="alert">Dziękujemy, Twój komentarz czeka na moderację.</div>';
                }

                ?>

                <div class='col-md-12 col-sm-12 col-xs-12 no-padding' id='comments-box'>
                    <?php
                    $comments = $database->getPublishComments('comments', $id);
                    if ($comments->num_rows > 0) {
                        while ($single = $comments->fetch_assoc()):
                            ?>
                            <div class='col-md-12 col-sm-12 col-xs-12 single-comments-box'>
                                <div class="col-md-12 col-sm-12 col-xs-12 no-padding single-comments-author">
                                    <?php echo $single['author']; ?>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 no-padding single-comments-content">
                                    <?php echo $single['content']; ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    }

                    include 'resource/layout/comments.php';
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12" id="sidebar-content">
                <?php include 'resource/layout/sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>
<footer>

    <?php include 'resource/layout/footer.php'; ?>

</footer>
</body>
</html>
