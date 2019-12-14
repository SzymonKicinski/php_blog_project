<?php
$recordsGetValueById = getDB()->select('category', '','id,category_id', "{$row['id']}=p.category_id" );
$sql = 'SELECT c.name FROM category AS c, posts AS p WHERE {$row["id"]}=p.category_id';
echo $c=$smarty->assign('category,posts',$db->getDb($sql));

echo $database->getValueById('category', 'name', $row['category_id']); ?>

<?php $cate = $database->select("category" , ["name"]) ?>

{foreach $category as $cate}
{$cate['name']}
{/foreach}
$cate = $database->select("category" , ["name"])

//-------------------------------------------------------------------------------------------------------
<form class="subscribe" action="scripts/newsletter/add.php" method="post">

    <input class="subscribe-field" type="text" name="author"
           placeholder="Enter your Name" required>
    <input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
    <input class="subscribe-field" type="email" name="email"
           placeholder="Enter your Email" required>
    <input type="submit" class="btn" value="Send us"/>
//----------------------------------------------
    <form class="subscribe" action="{$conf->action_root}personSave" method="post">

    <input id="author" class="subscribe-field" type="text" name="author"
           placeholder="Enter your Name" required value="{$form->author}">
    <input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
    <input id="email" class="subscribe-field" type="text" name="email"
           placeholder="Enter your Email" required value="{$form->email}">
    <input type="submit" class="btn" value="Send us"/>


    //-------------------------------------------------------------------------------------------------------