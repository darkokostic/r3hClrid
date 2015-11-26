<?php /* Smarty version 3.1.27, created on 2015-11-26 17:51:05
         compiled from "/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/access/wrapper.html" */ ?>
<?php
/*%%SmartyHeaderCode:181128021356573879bb5ab4_24197355%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19c5b7759f11c886e3ad451b7c791d0004388f0' => 
    array (
      0 => '/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/access/wrapper.html',
      1 => 1448556561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181128021356573879bb5ab4_24197355',
  'variables' => 
  array (
    'lang' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56573879bd52c8_31879436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56573879bd52c8_31879436')) {
function content_56573879bd52c8_31879436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181128021356573879bb5ab4_24197355';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
<head>
	
	
	<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div id="content">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</body>
</html>
<?php }
}
?>