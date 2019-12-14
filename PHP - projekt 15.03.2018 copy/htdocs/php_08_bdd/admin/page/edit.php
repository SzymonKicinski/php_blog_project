<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
 require_once '/../../init.php';
?>

<?php include '/../layout/header.php'; ?>
<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // header('Location: ../../scripts/page/edit.php');
    //exit();
}
?>

<?php
$page = $database->getObjectById('page', $_GET['id']);
if ($page->num_rows > 0) {
    while ($row = $page->fetch_assoc()):
        ?>
        <form action="../../scripts/page/edit.php" method="post">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="page-title">Edytuj stronę</p>
                <?php
                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger" role="alert">Strona nie została zmieniona.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success" role="alert">Strona została poprawnie zmieniona.</div>';
                }
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="text" name="title" placeholder="Tytuł" class="form-control"
                           value="<?php echo $row['title']; ?>">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <textarea name="content" id="content" class="form-control"
                              value="wartosc"><?php echo $row['content']; ?></textarea>
                </div>
                <input type="hidden" value="<?php echo $session->getUserId(); ?>" name="author">
                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="submit" class="btn btn-primary pull-right" value="Zatwierdź/Wróć" style="background-color: #">
                </div>
            </div>
        </form>
        <?php
    endwhile;
} else {
    echo '<div class="alert alert-danger" role="alert">Strona nie istnieje.</div>';
}
?>
<script>
    CKEDITOR.replace('content');
</script>
<?php include '/../layout/footer.php'; ?>
