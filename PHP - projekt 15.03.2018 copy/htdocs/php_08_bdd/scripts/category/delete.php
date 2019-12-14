<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if (isset($_POST['id'])) {
    $result = $database->deleteCategory($_POST['id']);
    echo $result;
}
