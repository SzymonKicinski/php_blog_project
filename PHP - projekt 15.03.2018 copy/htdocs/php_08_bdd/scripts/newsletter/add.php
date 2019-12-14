<?php
require_once dirname (__FILE__).'../../bootstrap.php';
require_once dirname (__FILE__).'/../../init.php';

if (!isset($_POST['author']) || empty($_POST['author'])
    || !isset($_POST['email']) || empty($_POST['email'])) {
    $prev =  $_SERVER['HTTP_REFERER'] . "&status=errorNews";
    getMessages()->addError("<h3>Wystąpił błąd podczas zapisu rekordu w bazie danych</h3>".getDB()->error()[2]);
    //header('Location: ' . $prev);

    forwardTo('personList');
}
else {
    $prev =  $_SERVER['HTTP_REFERER'] . "&status=okNews";
    $result = $database->addNewsletter($_POST['author'],
        $_POST['email'], 'publish');
    // header('Location: ' . $prev);
    getMessages()->addInfo("<h3>Pomyślnie zapisano dane,</h3>");
    forwardTo('personList');
}

?>