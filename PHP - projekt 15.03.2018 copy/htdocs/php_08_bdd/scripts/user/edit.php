<?php
require_once dirname (__FILE__).'../../bootstrap.php';


if(!isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['email']) || empty($_POST['email'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ' . $prev);
    exit();
}
else {
    $result = $database->updateUser($_POST['login'],$_POST['email'], $_POST['description'], $_POST['id']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    header('Location: ' . $prev);
}

?>