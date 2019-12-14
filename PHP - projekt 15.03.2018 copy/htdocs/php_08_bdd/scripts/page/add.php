<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
 require_once '/../../init.php';
?>

<?php
require_once dirname (__FILE__).'../../bootstrap.php';

if(!isset($_POST['title']) || empty($_POST['title'])) {
    getMessages()->addError("<h3>Wystąpił błąd podczas zapisu rekordu w bazie danych</h3>".getDB()->error()[2]);
    header('Location: ../../app/ctrl.php?action=pageAdd');
    exit();
}
else {
    $result = $database->addPage($_POST['title'],$_POST['content'],$_POST['author']);
    //header('Location: ../../admin/page/add.php?status=ok');
    getMessages()->addInfo("<h3>Pomyślnie zapisano dane,</h3>");
    //header('Location: ../../admin/page/show.php');
    header('Location: ../../app/ctrl.php?action=pageShow');
}

?>