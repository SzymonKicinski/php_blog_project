<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php';  ?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <p class="page-title">Strony</p>
    <?php
    $pages = $database->select('page');
    if ($pages->num_rows > 0) {
        while ($row = $pages->fetch_assoc()):
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12 single-page-box" id="page-<?php echo $row['id']?>">
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <a href="../admin/page/edit.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['title']; ?>
                    </a>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 no-padding">
                    <?php echo $database->getValueById('users', 'login', $row['user_id']); ?>
                </div>

            </div>
            <?php
        endwhile;
    }
    else {
        echo '<div class="alert alert-danger" role="alert">Brak stron</div>';
    }
    ?>
</div>

<?php include '/../layout/footer.php';
?>
