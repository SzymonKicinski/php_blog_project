<?php require_once '/../../scripts/bootstrap/database.php'; ?>
<?php require_once '/../../scripts/bootstrap.php';
?>


<?php include '/../layout/header.php'; ?>
<?php
$post = $database->getObjectById('posts', $_GET['id']);
if ($post->num_rows > 0) {
    while ($row = $post->fetch_assoc()):
        ?>
        <form action="{$conf->app_url}/../../../app/ctrl.php?action=postEdit" method="post">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="page-title">Edytuj wpis</p>
                <?php
                if (isset($_GET['status']) && $_GET['status'] == "error") {
                    echo '<div class="alert alert-danger" role="alert">Wpis nie został zmieniony.</div>';
                }
                if (isset($_GET['status']) && $_GET['status'] == "ok") {
                    echo '<div class="alert alert-success" role="alert">Wpis został poprawnie zmieniony.</div>';
                }
                ?>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12" id="add-post-form-left">
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="text" name="title" placeholder="Tytuł" class="form-control"
                           value="<?php echo $row['title']; ?>">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <textarea name="excerpt" id="excerpt" class="form-control"
                      placeholder="Zajawka"><?php echo $row['excerpt']; ?></textarea>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <textarea name="content" id="content" class="form-control"><?php echo $row['content']; ?></textarea>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12" id="add-post-form-right">
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    Kategoria
                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                        <?php
                        $category = $database->select('category');
                        if ($category->num_rows > 0) {
                            while ($row = $category->fetch_assoc()):
                                ?>
                                <input type="radio" name="category" value="<?php echo $row['id']; ?>"
                                       checked><?php echo $row['name']; ?>
                                <br>
                                <?php
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    Status
                    <div class="col-md-21 col-sm-12 col-xs-12 no-padding">
                        <input type="radio" name="status" value="template" checked>Szkic<br>
                        <input type="radio" name="status" value="publish">Opublikowany<br>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
                    <input type="submit" class="btn btn-primary pull-right" value="Zatwierdź/Wróć" id="form-Action" style="background-color: #00c7ac !important;">
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" name="author" value="<?php echo $session->getUserId(); ?>">
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
