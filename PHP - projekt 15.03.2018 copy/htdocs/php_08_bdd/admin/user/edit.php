<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>



<?php include '/../layout/header.php'; ?>
<?php
$user = $database->getObjectById('users', $_GET['id']);
if ($user->num_rows > 0) {
    while ($row = $user->fetch_assoc()):
        ?>
        <form action="../../scripts/user/edit.php" method="post">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                <p class="page-title">Edytuj użytkownika</p>
                <?php
                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger" role="alert">Użytkownik nie została zmieniony.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success" role="alert">Użytkownik został poprawnie zmieniony.</div>';
                }
                ?>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                <input type="text" name="login" placeholder="Login" class="form-control"
                       value="<?php echo $row['login']; ?>">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                <input type="text" name="email" placeholder="Email" class="form-control"
                       value="<?php echo $row['email']; ?>">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                <input type="submit" class="btn btn-primary pull-right" value="Zatwierdź/Wróć" id="form-action" style="background-color: #00c7ac !important;">
            </div>
        </form>
        <?php
    endwhile;
} else {
    echo '<div class=\"alert alert-danger\" role=\"alert\">Strona nie istnieje.</div>';
}
?>
<?php include '/../layout/footer.php'; ?>
