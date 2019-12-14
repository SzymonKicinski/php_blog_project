<div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="comments-form">
    <form action="../scripts/comments/add.php" method="POST">
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <textarea name='content' placeholder='Treść' class='form-control'></textarea>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type='text' name='author' placeholder='Autor' class='form-control'>
        </div>
        <input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
        <div class="col-md-12 col-sm-12 col-xs-12 single-form-element">
            <input type="submit" value="Wyślij" class="btn btn-success pull-right">
        </div>
    </form>
</div>