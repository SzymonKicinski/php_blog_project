<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if (!isset($_POST['title']) || empty($_POST['title'])) {
    $prev = $_SERVER['HTTP_REFERER'] . '&status=error';
    header('Location: ' . $prev);
    exit();
} else {
    $result = $database->updatePost($_POST['title'], $_POST['excerpt'], $_POST['content'], $_POST['status'], $_POST['category'], $_POST['author'], $_POST['id']);
    $prev = $_SERVER['HTTP_REFERER'] . '&status=ok';
    header('Location: ' . $prev);
}

?>