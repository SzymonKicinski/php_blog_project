<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if(!isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['password']) || empty($_POST['password']) || !isset($_POST['email']) || empty($_POST['email'])) {
    header('Location: ../../app/ctrl.php?action=userAdd');
    exit();
}
else {
    $result = $database->addUser($_POST['login'],$_POST['email'], $_POST['password'], $_POST['description'], 1);
    header('Location: ../../app/ctrl.php?action=userShow');
}

?>