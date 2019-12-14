<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php require_once '/../layout/header.php'; ?>
<?php require_once '/../layout/menu.php'; ?>


<form action="../scripts/category/add.php" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <p class="page-title">Dodaj kategorię</p>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == "error") {
            echo '<div class="alert alert-danger" role="alert">Kategoria nie została dodana, sprawdź formularz.</div>';
        }
        if (isset($_GET['status']) && $_GET['status'] == "ok") {
            echo '<div class="alert alert-success" role="alert">Kategoria została poprawnie dodana.</div>';
        }
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type="text" name="name" placeholder="Nazwa" class="form-control">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <textarea name="description" id="excerpt" class="form-control" placeholder="Opis"></textarea>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type="submit" class="btn btn-primary pull-right" value="Dodaj">
        </div>
    </div>
</form>
<?php include '/../layout/footer.php'; ?>
