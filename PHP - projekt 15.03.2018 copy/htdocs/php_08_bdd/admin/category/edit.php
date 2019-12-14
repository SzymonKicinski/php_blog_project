<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>


<?php
if (!isset($_GET['id'])) {
    header('Location: ../../error.php');
    exit();
}
?>
<?php include '/../layout/header.php'; ?>
<?php
$category = $database->getObjectById('category', $_GET['id']);
if ($category->num_rows > 0):
    while ($row = $category->fetch_assoc()):
        ?>

        <form action="../../scripts/category/edit.php" method="post">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="page-title">Edytuj kategorię</p>
                <?php
                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger" role="alert">Kategoria nie została zmieniona.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success" role="alert">Kategoria została poprawnie zmieniona.</div>';
                }
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="text" name="name" placeholder="Nazwa" class="form-control" value='<?php echo $row['name']; ?>'>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <textarea name="description" id="excerpt" class="form-control" placeholder="Opis"><?php echo $row['description']; ?></textarea>
                </div>
                <input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="submit" class="btn btn-primary pull-right" value="Zatwierdź/Wróć" style="background-color: #00c7ac !important;">
                </div>
            </div>
        </form>
        <?php
    endwhile;
else:

endif;
?>
<?php include '/../layout/footer.php'; ?>
