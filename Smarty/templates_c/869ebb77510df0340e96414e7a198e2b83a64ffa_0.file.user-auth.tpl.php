<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:37:49
  from '/var/www/html/templates/apollo/user-auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fd5d3569c0_22121112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869ebb77510df0340e96414e7a198e2b83a64ffa' => 
    array (
      0 => '/var/www/html/templates/apollo/user-auth.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:user-register-form.tpl' => 2,
    'file:user-register-twitter-form.tpl' => 1,
    'file:user-auth-login-form.tpl' => 2,
    'file:user-auth-forgot-pass-form.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b1fd5d3569c0_22121112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general"), 0, false);
?> 
<div id="content">
  <div class="container-fluid">
	<div class="row pm-user-auth">
	<div class="col-md-12">
		<nav class="tabbable" role="navigation">
			<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['my_account'])===null||$tmp==='' ? 'My Account' : $tmp);?>
</h1>

			<ul class="nav nav-tabs nav-underlined nav-right">
				<?php if ($_smarty_tpl->tpl_vars['allow_registration']->value == '1') {?>
				<li<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'register' || $_smarty_tpl->tpl_vars['display_form']->value == 'twitter') {?> class="active"<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'register') {?>
						<a href="#pm-register" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['create_account'];?>
</a>
					<?php } else { ?>
						<a href="<?php echo @constant('_URL');?>
/register.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['create_account'];?>
</a>
					<?php }?>
				</li>
				<?php }?>
				<li<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'login') {?> class="active"<?php }?>><a href="#pm-login" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
</a></li>
				
				<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'forgot_pass') {?>
				<li class="active"><a href="#pm-reset" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['forgot_pass'];?>
</a></li>
				<?php }?>
			</ul>
		</nav><!-- #site-navigation -->

		<div class="tab-content">
			<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'register' || $_smarty_tpl->tpl_vars['display_form']->value == 'twitter') {?> active<?php }?>" id="pm-register">
			<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'register') {?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
					<div class="alert alert-info">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['register_msg2'];?>
 <?php echo $_smarty_tpl->tpl_vars['inputs']->value['email'];?>
. <br /><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br />
					</div>
				<?php } else { ?>
					<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
						<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
								<li><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						</div>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender('file:user-register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['display_form']->value == 'twitter') {?>
				<?php $_smarty_tpl->_subTemplateRender('file:user-register-twitter-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender('file:user-register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
			</div>
			
			<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'login') {?> active<?php }?>" id="pm-login">
			<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'login') {?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
					
				<?php } else { ?>
					<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
						<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
								<li><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						</div>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender('file:user-auth-login-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender('file:user-auth-login-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?> 
			</div>
			
			<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'forgot_pass') {?> active<?php }?>" id="pm-reset">
			<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'forgot_pass') {?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
					<div class="alert alert-info">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['fp_msg'];?>

					</div>
				<?php } else { ?>
					<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						  <li><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender('file:user-auth-forgot-pass-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender('file:user-auth-forgot-pass-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
			</div>


			<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'activate_acc') {?> active<?php }?>" id="pm-reset">
			<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'activate_acc') {?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
					<div class="alert alert-success">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['activate_account_msg1'];?>

					</div>
				<?php } else { ?>
					<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						  <li><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<?php }?>
				<?php }?>
			<?php }?>
			</div>
			
			<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'pwdreset') {?> active<?php }?>" id="pm-reset">
			<?php if ($_smarty_tpl->tpl_vars['display_form']->value == 'pwdreset') {?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
					<div class="alert alert-success">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['activate_pass_msg1'];?>

					</div>
				<?php } else { ?>
					<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						  <li><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<?php }?>
				<?php }?>
			<?php }?>
			</div>
			
		</div><!-- /tab-content -->
	</div><!-- #content -->
	</div><!-- .row --> 
  </div><!-- .container -->


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>'auth'), 0, false);
?> <?php }
}
