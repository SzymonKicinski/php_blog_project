<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php'; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <p class="page-title">Kategorie</p>
    <?php
    $category = $database->select('category');
    if ($category->num_rows > 0) {
        while ($row = $category->fetch_assoc()):
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12 single-page-box" id="category-<?php echo $row['id']?>">
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <a href="{$conf->app_url}/../../admin/category/edit.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['name']; ?>
                    </a>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 no-padding">
                    <?php echo $row['description']; ?>
                </div>

            </div>
            <?php
        endwhile;
    }
    else {
        echo '<div class="alert alert-danger" role="alert">Brak kategorii</div>';
    }
    ?>
</div>
<?php include '/../layout/footer.php'; ?>
