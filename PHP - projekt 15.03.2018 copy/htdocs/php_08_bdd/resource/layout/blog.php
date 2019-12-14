<?php
$posts = $database->select('posts');
if ($posts->num_rows > 0) {
    while ($row = $posts->fetch_assoc()):
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12 loop-single-post">
            <div class="col-md-12 col-sm-12 col-xs-12 loop-single-title">
                <p><a href="single.php?id=<?php echo $row['id']?>"><?php echo $row['title']; ?></a></p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 loop-single-excerpt">
                <?php echo $row['excerpt']; ?>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 loop-single-info">
                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                    <i class="fa fa-hashtag"></i><?php echo $database->getValueById('category', 'name', $row['category_id']); ?>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                    <i class="fa fa-calendar-check-o"></i><?php echo $row['created']; ?>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                    <i class="fa fa-user"></i><?php echo $database->getValueById('users', 'login', $row['user_id']); ?>
                </div>
            </div>
        </div>
        <?php
    endwhile;
}
?>