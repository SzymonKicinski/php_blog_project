<?php
require_once dirname (__FILE__).'/../init.php';
require_once dirname (__FILE__).'/../scripts/bootstrap.php';
require_once dirname (__FILE__).'/../scripts/bootstrap/database.php';
?>
<?php
// Po załadowaniu skryptu 'init.php' w całej aplikacji dostępne są obi
require_once('/../scripts/bootstrap.php');

if(!$session->checkSession()) {
    header('Location: auth/login.php');
    exit();
}
header("{$conf->app_url}/../../../app/ctrl.php?action=pageAdd");

//header('Location: dashboard/index.php');
exit();


?>
