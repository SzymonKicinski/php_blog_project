<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if(!isset($_POST['author']) || empty($_POST['author']) || !isset($_POST['content']) || empty($_POST['content'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ../../app/ctrl.php?action=commentsEdit');
    exit();
}
else {
    $result = $database->updateComments($_POST['author'],$_POST['content'], $_POST['id']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    header('Location: ../../app/ctrl.php?action=commentsShow');
}

?>