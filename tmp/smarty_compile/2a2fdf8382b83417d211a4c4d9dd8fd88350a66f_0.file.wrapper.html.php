<?php /* Smarty version 3.1.27, created on 2015-11-26 17:51:03
         compiled from "/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/wrapper.html" */ ?>
<?php
/*%%SmartyHeaderCode:1265935015565738775c1773_69281726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2fdf8382b83417d211a4c4d9dd8fd88350a66f' => 
    array (
      0 => '/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/wrapper.html',
      1 => 1448556561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265935015565738775c1773_69281726',
  'variables' => 
  array (
    'lang' => 0,
    'meta_title' => 0,
    'currentAlbum' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565738776451f6_80830157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565738776451f6_80830157')) {
function content_565738776451f6_80830157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1265935015565738775c1773_69281726';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<!-- Latest compiled and minified CSS  for bootstrap -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Bootstrap Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- jquery ui css -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />


<!-- fancytree css -->
<link rel='stylesheet' type='text/css' media='screen' href='https://static.worldsoft-cms.info/js/jquery/plugins/fancytree/2.1.0/dist/skin-lion/ui.fancytree.css' />



<!-- Local css -->
<link rel="stylesheet" href="/js/bower_components/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />
<link rel="stylesheet" href="/css/dashboard.css">


<?php if ($_smarty_tpl->tpl_vars['currentAlbum']->value) {?>
<?php echo '<script'; ?>
>
	window.currentAlbum = '<?php echo $_smarty_tpl->tpl_vars['currentAlbum']->value;?>
';
<?php echo '</script'; ?>
>
<?php }?>

		
	

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Parse CMS</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<?php if ($_SESSION['username']) {?>
	            <li><a href="/admin/">Admin</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'];?>
 <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/access/logout">Logout</a></li>
					</ul>
				</li>
			<?php } else { ?>
            	<li><a href="/access/login">Login</a></li>
			<?php }?>
          </ul>
        </div>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<!-- content -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
	      <div id="sitemenu"></div>
		</div>
	
		
		<div class="col-md-10 main">
			
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			
		</div>
	</div>
</div>




<?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"><?php echo '</script'; ?>
>




<?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type='text/javascript' src='https://static.worldsoft-cms.info/js/jquery/plugins/fancytree/2.1.0/dist/jquery.fancytree.min.js'  ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='https://static.worldsoft-cms.info/js/jquery/plugins/fancytree/2.1.0/dist/src/jquery.fancytree.persist.js'  ><?php echo '</script'; ?>
>



<!-- Local js -->
<?php echo '<script'; ?>
 src="/js/app.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>