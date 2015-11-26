<?php /* Smarty version 3.1.27, created on 2015-11-26 17:51:05
         compiled from "/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/access/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:74882096156573879b442f2_90616736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa83c8a03d2305569a839d22119c4712c84f0038' => 
    array (
      0 => '/media/darko/01D06E6CA97ED7D0/New and Rising/Projekat Moj Katalog/ZanatlijaAdminPanel/application/views/access/login.html',
      1 => 1448556561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74882096156573879b442f2_90616736',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56573879b7cb47_52463653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56573879b7cb47_52463653')) {
function content_56573879b7cb47_52463653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74882096156573879b442f2_90616736';
?>
<div class="container-fluid">
	<div class="row" id="login-container">

	<div id="login" class="col-md-4 col-md-offset-4 ">


		<h5>Please sign in to get access.</h5>

		<form id="login-form" method="POST" action="/access/authenticate" class="form">

			<div class="form-group">
				<label for="login-username">Username</label>
				<input type="text" class="form-control" id="login-username" placeholder="Username" name="login">
			</div>

			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" id="login-password" placeholder="Password" name="passwd">
			</div>

			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-primary btn-block">Login &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		</form>


		<!--	<a href="javascript:;" class="btn btn-default">Forgot Password?</a> -->

	</div> <!-- /#login -->
</div> <!-- /#login-container -->



<div class="row">
	<div id="createaccount" class="col-md-4  col-md-offset-4">
		<h1 style="text-align:center"> OR </h1>
		
		<h5>Create an account if you do not have one already.</h5>
		<form id="login-form" method="POST" action="/access/create" class="form">

			<div class="form-group">
				<label for="login-username">Username</label>
				<input type="text" class="form-control" id="login-username" placeholder="Username" name="login">
			</div>

			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" id="login-password" placeholder="Password" name="passwd">
			</div>
			<!--
			<div class="form-group">
				<label for="login-email">Email address</label>
				<input type="email" class="form-control" id="login-email" placeholder="Email address" name="email">
			</div>
			-->
			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-danger btn-block">Sign-up &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		</form>
		
	</div>


</div>
</div><?php }
}
?>