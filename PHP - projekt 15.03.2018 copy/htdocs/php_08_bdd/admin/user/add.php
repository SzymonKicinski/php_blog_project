<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php'; ?>
<form action="../../scripts/user/add.php" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <p class="page-title">Dodaj użytkownika</p>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == "error") {
            echo '<div class="alert alert-danger" role="alert">Użytkownik nie została dodany, sprawdź formularz.</div>';
        }
        if (isset($_GET['status']) && $_GET['status'] == "ok") {
            echo '<div class="alert alert-success" role="alert">Użytkownik został poprawnie dodany.</div>';
        }
        ?>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
        <input type="text" name="login" placeholder="Login" class="form-control">
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
        <input type="text" name="password" placeholder="Hasło" class="form-control">
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
        <input type="text" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
        <input type="submit" class="btn btn-primary pull-right" value="Dodaj" id="form-action">
    </div>
</form>
<?php include '/../layout/footer.php'; ?>
