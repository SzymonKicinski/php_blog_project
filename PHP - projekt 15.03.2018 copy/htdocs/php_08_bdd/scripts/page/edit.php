<?php
require_once dirname (__FILE__).'../../bootstrap.php';
require_once dirname (__FILE__).'../../bootstrap/database.php';
require_once dirname (__FILE__).'/../../init.php';

if (!isset($_POST['title']) || empty($_POST['title'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ' . $prev);
    exit();
} else {
    $result = $database->updatePage($_POST['title'], $_POST['content'], $_POST['author'], $_POST['id']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    //header('Location: ' . $prev);
    //header('Location: ../../admin/page/show.php');
    header('Location: ../../app/ctrl.php?action=pageShow');

}

?>