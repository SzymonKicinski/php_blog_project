<?php /* Smarty version 3.1.27, created on 2017-08-27 10:16:39
         compiled from "C:\xampp\htdocs\php_08_bdd\app\person\list\PersonList.php" */ ?>
<?php
/*%%SmartyHeaderCode:1490559a27fe7a692c3_19732275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1287dbbf75e7f0c98237c03e5f0d37251a04614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bdd\\app\\person\\list\\PersonList.php',
      1 => 1503821730,
      2 => 'file',
    ),
    'a544d00956f9be9a4bc70c063599243aa88e78af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bdd\\templates\\main.php',
      1 => 1503761490,
      2 => 'file',
    ),
    '237dd9ba0677cebd00a21c002b8cfd36f98ee939' => 
    array (
      0 => '237dd9ba0677cebd00a21c002b8cfd36f98ee939',
      1 => 0,
      2 => 'string',
    ),
    '7f1c7d0f2756dfeca26f50e909d17ffb55d7b29d' => 
    array (
      0 => '7f1c7d0f2756dfeca26f50e909d17ffb55d7b29d',
      1 => 0,
      2 => 'string',
    ),
    '426d549c50585ea6f51b22074f691cf511362083' => 
    array (
      0 => '426d549c50585ea6f51b22074f691cf511362083',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1490559a27fe7a692c3_19732275',
  'variables' => 
  array (
    'conf' => 0,
    'msgs' => 0,
    'err' => 0,
    'inf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a27fe7b01388_18323175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a27fe7b01388_18323175')) {
function content_59a27fe7b01388_18323175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1490559a27fe7a692c3_19732275';
echo '<?php
';?>
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


<?php
$_smarty_tpl->properties['nocache_hash'] = '1490559a27fe7a692c3_19732275';
?>


<header id="top" class="header">
	<nav class="site-nav">
		<div class="container">
			<div style="float: left;padding-top: 15px; padding-right: 100px; padding-left: 100px; ">
				<a class="link logo" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">DR PC</a>
			</div>


            <?php
$_from = $_smarty_tpl->tpl_vars['page']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                <li><p style="text-align: center; color: #f2f2f2; padding-top: 15px;"  class="list" ><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
postsOpenSingle1&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["title"];?>
</a></p></li>
            <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>



			<div style="float: left">
				<ul class="list">



					<div style="float: left;padding-top: 15px; padding-left: 150px; padding-right: 15px;"> <li >
						<a  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="link">Home</a>
					</li></div>

                    <!-- LOGOWANIE!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
					<div style="float: left;padding: 15px;"><li >
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/admin/auth/login.php" class="link login">Accounts</a>
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

	<div class="go-top">
		<a class="icon-up" href="#top">Go top</a>
	</div>

</header>


</br>
</br>
</br>

<?php
$_smarty_tpl->properties['nocache_hash'] = '1490559a27fe7a692c3_19732275';
?>


<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
</br></br><div id="middle-content" class="container-fluid"><div class="col-md-12 col-sm-12 col-xs-12 loop-single-post"><div class="col-md-12 col-sm-12 col-xs-12 loop-single-title"><p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
postsOpenSingle&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value["title"];?>
</a></p></div><div class="col-md-12 col-sm-12 col-xs-12 loop-single-excerpt"><?php echo $_smarty_tpl->tpl_vars['row']->value['excerpt'];?>
</div><div class="col-md-12 col-sm-12 col-xs-12 loop-single-info"><div class="col-md-4 col-sm-4 col-xs-12 no-padding"><i class="fa fa-hashtag"></i><?php echo $_smarty_tpl->tpl_vars['row']->value['post_name'];?>
</div><div class="col-md-4 col-sm-4 col-xs-12 no-padding"><i class="fa fa-calendar-check-o"></i><?php echo $_smarty_tpl->tpl_vars['row']->value['created'];?>
</div><div class="col-md-4 col-sm-4 col-xs-12 no-padding"><i class="fa fa-user"></i></div></div></div></div>
<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>






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



<?php
$_smarty_tpl->properties['nocache_hash'] = '1490559a27fe7a692c3_19732275';
?>



<div  id="footer-content">
	<section class="newsletter">
		<div id="newsletter" class="container">
			<h3 class="headline-3"><span class="primary-text">Subscribe our</span>
				<span class="secondary-text">Newsletter</span></h3>
			<p class="paragraph">Subscribe, we will send you our weekly hot offers</p>
            <!-- <form class="subscribe" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newsletterNew" method="post"> -->
        <br>
        <br>
        <br>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newsletterNew" method="post"
                  >
                <fieldset style="border-style: none " class="subscribe">
                    <div>

                        <input id="author" type="text" name="author"
                               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->author;?>
" placeholder="Enter your Name" class="subscribe-field">
                    </div>
                    <div class="subscribe-field">

                        <input id="email" type="text" placeholder="Enter your Email" name="email"
                               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" class="subscribe-field">
                    </div>
                    <div class="subscribe-field" >
                        <input  type="submit" class="btn"
                                value="Send us"/>
                    </div>
                </fieldset>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
            </form>
        </div>
    </section>
<div class="foot-menu" id="contac_us">
	<nav class="foot-nav" >
		<section class="column">
			<h4 class="headline-4">Company</h4>
			<ul class="list">
				<li class="menu-item"> <a href="#home" class="link">Home</a> </li>
				<li class="menu-item"> <a href="#about-us" class="link">About us</a> </li>
				<li class="menu-item"> <a href="#services" class="link">Services</a> </li>
				<li class="menu-item"> <a href="#footer" class="link">Contact us</a> </li>
			</ul>
		</section>
		<section class="column">
			<h4 class="headline-4">Quick links</h4>
			<ul class="list">
				<li> <a href="" class="link">Designers</a> </li>
				<li> <a href="" class="link">Pricing plan</a> </li>
				<li> <a href="" class="link">Services</a> </li>
				<li> <a href="" class="link">Download</a> </li>
			</ul>
		</section>
		<section class="column">
			<h4 class="headline-4">Conditions</h4>
			<ul class="list">
				<li> <a href="" class="link">Online support</a> </li>
				<li> <a href="" class="link">Privacy</a> </li>
				<li> <a href="" class="link">Terms</a> </li>
				<li> <a href="" class="link">Policy</a> </li>
			</ul>
		</section>
		<section class="column get-connected">
			<h4 class="headline-4GetConnected">Get connected</h4>
			<ul class="socials list">
				<li class="list-item"> <a href="" class="icon icon-facebook"></a> </li>
				<li class="list-item"> <a href="" class="icon icon-twitter"></a> </li>
				<li class="list-item"> <a href="" class="icon icon-gplus"></a> </li>
			</ul>
			<div class="contact">
				<a href="tel:1234567890" class="link tb-tel">
					<i class="icon icon-phone"></i>
					123 456 7890
				</a>
				<a href="mailto:sampel@name.com" class="link tb-mail">
					<i class="icon icon-mail"></i>
					sampel@name.com
				</a>
			</div>
		</section>
	</nav>
</div>
</div>


</tbody>



</body>

</html><?php }
}
?>