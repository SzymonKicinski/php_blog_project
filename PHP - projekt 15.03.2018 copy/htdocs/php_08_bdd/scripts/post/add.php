<?php
require_once dirname (__FILE__).'../../bootstrap.php';
require_once dirname (__FILE__).'/../../init.php';

if(!isset($_POST['title']) || empty($_POST['title'])) {
    header('Location: ../../app/ctrl.php?action=postAdd');
    exit();
}
else {
    $result = $database->addPost($_POST['title'], $_POST{'excerpt'}, $_POST['content'], $_POST['author'], $_POST['status'], $_POST['category']);
    header('Location: ../../app/ctrl.php?action=postShow');
}

?>