<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
require_once '/../../init.php';
?>


<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))) {
    header('Location: ../../admin/auth/login.php');
    exit();
}
else {
    require_once '../bootstrap.php';
    $login = $_POST['login'];
    $password = sha1($_POST['haslo']);

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");

    $result = $database->loginUser($login,$password);
    if ($result->num_rows > 0) {
        $_SESSION['auth'] = true;
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['login'];
        $idLogin =1;
        header('Location: ../../app/ctrl.php?action=pageAdd');
        //header("{$conf->app_url}/../../../app/ctrl.php?action=pageAdd");
    } else {
        header('Location: ../../admin/auth/login.php');
    }
}
?>