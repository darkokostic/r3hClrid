<?php /* Smarty version 3.1.27, created on 2015-11-26 17:51:16
         compiled from "/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/admin/wrapper.html" */ ?>
<?php
/*%%SmartyHeaderCode:121796783056573884098f41_84834035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62838a0df4921b36fcbc4f14ff235e9d59b37a08' => 
    array (
      0 => '/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/admin/wrapper.html',
      1 => 1448556561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121796783056573884098f41_84834035',
  'variables' => 
  array (
    'lang' => 0,
    'meta_title' => 0,
    'currentAlbum' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565738840ecb27_09380818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565738840ecb27_09380818')) {
function content_565738840ecb27_09380818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '121796783056573884098f41_84834035';
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.min.css" type="text/css" />

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
	<div class="navbar navbar-inverse " role="navigation">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Parse CMS</a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="/">Home</a></li>
	
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/admin/pages">List</a></li>
						<li><a href="/admin/createpage">New Page</a></li>
					</ul>
				</li>


				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Navigation <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/admin/createnav">New element</a></li>
					</ul>
				</li>
	
	
	
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'];?>
 <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/access/logout">Logout</a></li>
					</ul>
				</li>
	          </ul>
	        </div>
	      </div>
	    </div>


<!-- content -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
	      <div id="tree"></div>
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
 type='text/javascript' src='https://static.worldsoft-cms.info/js/jquery/plugins/fancytree/2.1.0/dist/src/jquery.fancytree.dnd.js'  ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='https://static.worldsoft-cms.info/js/jquery/plugins/fancytree/2.1.0/dist/src/jquery.fancytree.persist.js'  ><?php echo '</script'; ?>
>



<!-- Latest compiled and minified JavaScript -->
<!-- Local js -->
<?php echo '<script'; ?>
 src="/js/app.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>