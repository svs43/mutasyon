<?php /* Smarty version 3.1.27, created on 2016-03-13 19:17:50
         compiled from "/var/www/html/mutasyon/themes/default/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:158441791856e5a0be4b0800_16030361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40b67c38602d24e1f0b6fb1de2917d8f9464af5' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/login.html',
      1 => 1456420597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158441791856e5a0be4b0800_16030361',
  'variables' => 
  array (
    'css' => 0,
    '_write_email' => 0,
    '_password' => 0,
    '_login_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e5a0be51dff4_49739881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e5a0be51dff4_49739881')) {
function content_56e5a0be51dff4_49739881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158441791856e5a0be4b0800_16030361';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mutasyon Giriş</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/login.css">
     <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.min.css">
  </head>
  <div class="container">
	<div class="login-container">
            <div class="avatar"></div>
            <div class="form-box">
                <form action="login.php" method="post">
                <div id="output"></div>
                    <input name="username" type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['_write_email']->value;?>
">
                    <input name="passwd" type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['_password']->value;?>
">                    
                    <button class="btn btn-info btn-block login" type="submit"><?php echo $_smarty_tpl->tpl_vars['_login_button']->value;?>
</button>
                </form>
            </div>
        </div>
</div> <?php }
}
?>