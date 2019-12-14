<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>


<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php'; ?>
<form action="{$conf->app_url}/../../scripts/page/add.php" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <p class="page-title">Dodaj stronę</p>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == "error") {
            echo '<div class="alert alert-danger" role="alert">Strona nie została dodana, sprawdź formularz.</div>';
        }
        if (isset($_GET['status']) && $_GET['status'] == "ok") {
            echo '<div class="alert alert-success" role="alert">Strona została poprawnie dodana.</div>';
        }
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type="text" name="title" placeholder="Tytuł" class="form-control">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <textarea name="content" id="content" class="form-control">
            </textarea>
        </div>
        <input type="hidden" value="<?php echo $session->getUserId(); ?>" name="author">
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type="submit" class="btn btn-primary pull-right" value="Dodaj">
        </div>
    </div>
</form>
<script>
    CKEDITOR.replace('content');
</script>
<?php include '/../layout/footer.php'; ?>
