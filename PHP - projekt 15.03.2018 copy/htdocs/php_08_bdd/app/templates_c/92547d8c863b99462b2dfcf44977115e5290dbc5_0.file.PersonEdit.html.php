<?php /* Smarty version 3.1.27, created on 2017-07-15 17:45:25
         compiled from "C:\xampp\htdocs\php_08_bd\app\person\edit\PersonEdit.php" */ ?>
<?php
/*%%SmartyHeaderCode:12960596a3895625dc1_47067874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92547d8c863b99462b2dfcf44977115e5290dbc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bd\\app\\person\\edit\\PersonEdit.php',
      1 => 1500122776,
      2 => 'file',
    ),
    '51a5c90c86b19b34c2060a6d12e37dff8787b1e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bd\\templates\\main.php',
      1 => 1500133519,
      2 => 'file',
    ),
    '42781bc3cc81ec5678e4055869ae2f2e603d9478' => 
    array (
      0 => '42781bc3cc81ec5678e4055869ae2f2e603d9478',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12960596a3895625dc1_47067874',
  'variables' => 
  array (
    'conf' => 0,
    'msgs' => 0,
    'err' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596a38956ad4c4_01680540',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596a38956ad4c4_01680540')) {
function content_596a38956ad4c4_01680540 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12960596a3895625dc1_47067874';
echo '<?php ';?>require_once('<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/scripts/bootstrap.php');

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
/resource/js/ '><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/resource/css/layout.css">
	<title>DR PC</title>

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

	<?php echo '<script'; ?>
>

        jQuery(function ($)
            {
                $.scrollTo(0);
                $('#id_newsletter').click(function () { $.scrollTo($('#newsletter'), 1000 ); });
                $('#id_contac_us').click(function () { $.scrollTo($('#contac_us'), 1000 ); });
            }
        );
	<?php echo '</script'; ?>
>
</head>

<body>
<header id="top" class="header">
	<nav class="site-nav">
		<div class="container">
			<div style="float: left;padding-top: 15px; padding-right: 100px; padding-left: 100px; ">
				<a class="link logo" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../../index.php">DR PC</a>  <!-- Check this href -->
			</div>

			<?php echo '<?php
            ';?>$pages = $database->select('page');
			if ($pages->num_rows > 0) {
			while ($row = $pages->fetch_assoc()):
			<?php echo '?>';?>

			<p style="padding-top: 20px; padding-left:10px; " >
				<a   href="page.php?id=<?php echo '<?php ';?>echo $row['id']; <?php echo '?>';?>"><?php echo '<?php ';?>echo $row['title']; <?php echo '?>';?></a>                                    </a>
			</p>
			<?php echo '<?php
                ';?>endwhile;
            } else {
            }
            <?php echo '?>';?>
			<div style="float: left">
				<ul class="list">



					<div style="float: left;padding-top: 15px; padding-left: 150px; padding-right: 15px;"> <li >
						<a  href="../../index.php" class="link">Home</a>
					</li></div>

					<div style="float: left;padding: 15px;"><li >
						<a href="admin/dashboard/index.php" class="link login">Accounts</a>
					</li></div>

					<div style="float: left;padding: 15px;"><li >
						<a id="id_newsletter" href="#" class="link">Newsletter</a>
					</li></div>

					<div style="float: left;padding: 15px;"> <li >

					</li></div>
				</ul>

			</div>

			<div style="clear: both"></div>
		</div>

	</nav>
	<!--***************************************************************************************************************-->
	<nav class="mobile-nav">
		<div class="top-nav-bar container">
			<a class="link logo" href="../../index.php">DR PC</a>
			<button type="button" class="hamburger"></button>
		</div>
		<ul class="list">
			<li >
				<a class="link logo" href="../../index.php">DR PC</a>
			</li>
			<li>
				<?php echo '<?php
                ';?>$pages = $database->select('page');
				if ($pages->num_rows > 0) {
				while ($row = $pages->fetch_assoc()):
				<?php echo '?>';?>

				<p style="text-align: center; color: #f2f2f2;"  class="list">
					<a   href="page.php?id=<?php echo '<?php ';?>echo $row['id']; <?php echo '?>';?>"><?php echo '<?php ';?>echo $row['title']; <?php echo '?>';?></a>                                    </a>
				</p>
				<?php echo '<?php
                    ';?>endwhile;
                } else {
                }
                <?php echo '?>';?>
			</li>
			<li >
				<a  href="../../index.php" class="link">Home</a>
			</li>
			<li >
				<a href="admin/dashboard/index.php" class="link login">Accounts</a>
			</li>
			<li>
				<a href="admin/dashboard/index.php" class="link">Newsletter</a>
			</li>
			<li >
				<a href="#footer" class="link">Contact us</a>
			</li>
			<li>

			</li>
		</ul>
	</nav>
	<div class="go-top">
		<a class="icon-up" href="#top">Go top</a>
	</div>

</header>


<?php
$_smarty_tpl->properties['nocache_hash'] = '12960596a3895625dc1_47067874';
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>





<div class="bottom-margin">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error">
	<ol>
	<?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value->getErrors();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
	</ol>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info">
	<ol>
	<?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value->getInfos();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inf']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
$foreach_inf_Sav = $_smarty_tpl->tpl_vars['inf'];
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
$_smarty_tpl->tpl_vars['inf'] = $foreach_inf_Sav;
}
?>
	</ol>
</div>
<?php }?>
</div>








</body>

</html><?php }
}
?>