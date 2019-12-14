<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if (!isset($_POST['author']) || empty($_POST['author']) || !isset($_POST['content']) || empty($_POST['content'])) {
    $prev =  $_SERVER['HTTP_REFERER'] . "&status=error";
    header('Location: ../../app/ctrl.php?action=commentsAdd');
}
else {
    $prev =  $_SERVER['HTTP_REFERER'] . "&status=ok";
    $result = $database->addComments($_POST['author'], $_POST['content'], 'block', $_POST['post_id']);
    header('Location: ../../app/ctrl.php?action=commentsShow');
}


?>