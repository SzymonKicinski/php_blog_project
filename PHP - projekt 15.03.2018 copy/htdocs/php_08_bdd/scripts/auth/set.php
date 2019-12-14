<?php
require_once dirname (__FILE__).'../../bootstrap.php';
require_once dirname (__FILE__).'/../../init.php';

if (!isset($_POST['token']) || empty($_POST['token']) || !isset($_POST['password']) || empty($_POST['password'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ' . $prev);
    exit();
} else {
    $result = $database->updatePassword($_POST['token'], $_POST['password']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    header('Location: ' . $prev);
}

?>