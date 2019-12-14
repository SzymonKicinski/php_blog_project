<?php

require_once dirname (__FILE__).'../../bootstrap.php';

if (isset($_POST['id'])) {
    $result = $database->changeCommentStatus($_POST['id'], $_POST['status']);
}
?>