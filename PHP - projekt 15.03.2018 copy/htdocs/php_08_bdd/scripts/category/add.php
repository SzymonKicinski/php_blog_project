<?php
require_once dirname (__FILE__).'../../bootstrap.php';
require_once dirname (__FILE__).'/../../init.php';

if(!isset($_POST['name']) || empty($_POST['name'])) {
    header('Location: ../../app/ctrl.php?action=categoryAdd');
    exit();
}
else {
    $result = $database->addCategory($_POST['name'],$_POST['description']);
    header('Location: ../../app/ctrl.php?action=categoryShow');
}

?>