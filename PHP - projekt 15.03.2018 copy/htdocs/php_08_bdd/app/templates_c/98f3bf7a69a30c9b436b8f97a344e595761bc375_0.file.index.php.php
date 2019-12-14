<?php /* Smarty version 3.1.27, created on 2017-08-05 12:24:38
         compiled from "C:\xampp\htdocs\php_08_bdd\admin\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:2794859859ce61e2805_62932135%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98f3bf7a69a30c9b436b8f97a344e595761bc375' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bdd\\admin\\index.php',
      1 => 1501920405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2794859859ce61e2805_62932135',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59859ce622eae3_92876850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59859ce622eae3_92876850')) {
function content_59859ce622eae3_92876850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2794859859ce61e2805_62932135';
echo '<?php
';?>require_once dirname (__FILE__).'/../init.php';
require_once dirname (__FILE__).'/../scripts/bootstrap.php';
require_once dirname (__FILE__).'/../scripts/bootstrap/database.php';

// Po załadowaniu skryptu 'init.php' w całej aplikacji dostępne są obi
require_once('/../scripts/bootstrap.php');

if(!$session->checkSession()) {
    header('Location: auth/login.php');
    exit();
}

header('Location: dashboard/index.php');
exit();


<?php echo '?>';

}
}
?>