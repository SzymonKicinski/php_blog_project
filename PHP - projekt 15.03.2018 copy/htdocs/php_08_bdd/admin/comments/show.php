<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>

<?php include '/../layout/header.php'; ?>
<?php include '/../layout/menu.php'; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <p class="page-title">Komentarze</p>
    <?php
    $comments = $database->select('comments');
    if ($comments->num_rows > 0) {
        while ($row = $comments->fetch_assoc()):
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12 single-page-box" id="comments-<?php echo $row['id'] ?>">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                    <a href="../admin/comments/edit.php?id=<?php echo $row['id']; ?>">
                        <?php echo $row['content']; ?>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <?php echo $row['author']; ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                    <?php
                    if ($row['status'] == 'block'):
                        ?>
                        <span class='comments-block'><?php echo $row['status']; ?></span>
                        <i class="fa fa-check ajax-change-comments" data-target="<?php echo $row['id']; ?>" data-status="<?php echo $row['status']; ?>"></i>
                        <?php
                    else:
                        ?>
                        <?php
                    endif;
                    ?>
                    <i class="fa fa-trash ajax-delete-comments" data-target="<?php echo $row['id']; ?>"></i>
                </div>
            </div>
            <?php
        endwhile;
    } else {
        echo '<div class="alert alert-danger" role="alert">Brak komentarzy</div>';
    }
    ?>
</div>
<?php include '/../layout/footer.php'; ?>
