<div id="About_me" class="col-md-12 col-sm-12 col-xs-12 no-padding sidebar-single-widget">
    <p class='widget-title'>O mnie</p>
    Z zamiłowania jestem blogerem. Będę starał się podzielić z wami tym co najlepsze. Głównie elektroniką
    oraz czasem coś od siebie. Jestem studentem na Wydziale Informatyki w Uniwersytecie Śląskim w Katowicach.
    W moich postach znajdziecie prze różne informacje ode mnie, ale przed wszystkim liczę na was i wasze pytania.
    To na nie będę odpowiadać w szczególności.
</div>
<div class="col-md-12 col-sm-12 col-xs-12 no-padding sidebar-single-widget">
    <p class='widget-title'>Kategorie</p>
    <?php
    $categories = $database->select('category');
    if ($categories->num_rows > 0) {
        while ($row = $categories->fetch_assoc()):
            ?>
            <p class="widget-category-single"><i class="fa fa-caret-right"></i><?php echo $row['name']; ?></p>
            <?php
        endwhile;
    } else {
        echo "Brak kategorii";
    }
    ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 no-padding sidebar-single-widget">

</div>