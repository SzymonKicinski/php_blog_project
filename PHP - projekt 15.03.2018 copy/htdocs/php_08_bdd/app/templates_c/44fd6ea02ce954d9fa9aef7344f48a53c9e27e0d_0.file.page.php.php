<?php /* Smarty version 3.1.27, created on 2017-08-26 22:47:55
         compiled from "C:\xampp\htdocs\php_08_bdd\page.php" */ ?>
<?php
/*%%SmartyHeaderCode:976059a1de7b190408_62087504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44fd6ea02ce954d9fa9aef7344f48a53c9e27e0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bdd\\page.php',
      1 => 1503780470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '976059a1de7b190408_62087504',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a1de7b1cd428_60831591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a1de7b1cd428_60831591')) {
function content_59a1de7b1cd428_60831591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '976059a1de7b190408_62087504';
echo '<?php
';?>include_once '/scripts/bootstrap/database.php';
include_once '/scripts/bootstrap.php';
include_once '/lib/smarty/Smarty.class.php';
$smarty= new Smarty;

<?php echo '?>';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <title>Dr PC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/jquery-2.1.1.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/bootstrap.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/myscript.js'><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/css/layout.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/css/style.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <?php echo '<?php ';?>include 'resource/layout/header.php' <?php echo '?>';?>
</header>

<section>
    <div class="container-fluid" id="middle-content">
        <div class="container" id="middle-background" >
            <div class="col-md-12 col-sm-12 col-xs-12" id="blog-content" style="color: white">

                <?php echo '<?php
                ';?>$id = $_GET['id'];
                $page = $database->getObject('page', 'id', $id);
                if ($page->num_rows > 0) {
                    while ($single = $page->fetch_assoc()) {
                        echo $single['content'];
                    }
                } else {

                }
                <?php echo '?>';?>
            </div>
        </div>
    </div>
</section>


<footer>
    <?php echo '<?php ';?>include 'resource/layout/footer.php'; <?php echo '?>';?>
</footer>

</body>
</html>
<?php }
}
?>