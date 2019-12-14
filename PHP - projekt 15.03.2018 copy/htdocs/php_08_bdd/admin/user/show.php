<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php'; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <p class="page-title">Wpisy</p>
    <?php
    $users = $database->select('users');
    if ($users->num_rows > 0) {
        while ($row = $users->fetch_assoc()):
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12 single-page-box" id="user-<?php echo $row['id']?>">
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <a href="../admin/post/edit.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['login']; ?>
                    </a>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 no-padding">
                    <?php echo $row['email']; ?>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12 no-padding">
                    <i class="fa fa-trash ajax-delete-user" data-target="<?php echo $row['id']; ?>"></i>
                </div>
            </div>
            <?php
        endwhile;
    }
    else {
        echo '<div class="alert alert-danger" role="alert">Brak użytkowników</div>';
    }
    ?>
</div>

<?php include '/../layout/footer.php';
?>
