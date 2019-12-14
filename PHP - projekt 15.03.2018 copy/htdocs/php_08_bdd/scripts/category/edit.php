<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if(!isset($_POST['name']) || empty($_POST['name'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ' . $prev);
    exit();
}
else {
    $result = $database->updateCategory($_POST['name'],$_POST['description'], $_POST['id']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    header('Location: ' . $prev);
}

?>