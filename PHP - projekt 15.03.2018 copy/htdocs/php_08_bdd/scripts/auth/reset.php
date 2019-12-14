<?php
if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $prev = $_SERVER['HTTP_REFERER'] . '?status=error';
    header('Location: ' . $prev);
    exit();
}
else {
    require_once dirname (__FILE__).'../../bootstrap.php';
    require_once dirname (__FILE__).'/../../init.php';
    $user = $database->getObject('users','email',$_POST['email']);
    if ($user->num_rows > 0) {
        $email = $user->fetch_assoc();
        header('Location: ../../admin/auth/setPassword.php?token=' . $email['recovery']);
    }
    else {
        $prev = $_SERVER['HTTP_REFERER'] . '?status=email';
        header('Location: ' . $prev);
    }

}

?>