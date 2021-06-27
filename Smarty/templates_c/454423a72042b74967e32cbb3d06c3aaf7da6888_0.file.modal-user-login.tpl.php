<?php
/* Smarty version 3.1.33, created on 2021-05-29 08:18:15
  from '/var/www/html/templates/apollo/modal-user-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1f8c7686262_55973107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '454423a72042b74967e32cbb3d06c3aaf7da6888' => 
    array (
      0 => '/var/www/html/templates/apollo/modal-user-login.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-auth-login-form.tpl' => 1,
  ),
),false)) {
function content_60b1f8c7686262_55973107 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="modal-login-form">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['sign_in'])===null||$tmp==='' ? 'Sign in' : $tmp);?>
</h4>
			</div>
			<div class="modal-body">
				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value != '1' && $_smarty_tpl->tpl_vars['allow_registration']->value == '1') {?>
				<div class="hidden-md hidden-lg">
					<label><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['no_account_register'])===null||$tmp==='' ? "Don't have an account yet? Register today!" : $tmp);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value || $_smarty_tpl->tpl_vars['allow_twitter_login']->value || $_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
						<a class="btn btn-sm btn-block btn-success ajax-modal" data-toggle="modal" data-dismiss="modal" data-backdrop="true" data-keyboard="true" href="#modal-register-form"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</a>
						<?php } else { ?>
						<a class="btn btn-sm btn-block btn-success" href="<?php echo @constant('_URL');?>
/register.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</a>
						<?php }?>
					<hr />
				</div>
				<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("file:user-auth-login-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value || $_smarty_tpl->tpl_vars['allow_twitter_login']->value || $_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
				<hr />
				<div class="pm-social-accounts">
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_with_social'];?>
</label>
					<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value) {?>
					<a href="<?php echo @constant('_URL');?>
/login.php?do=facebook" class="btn btn-facebook" rel="nofollow"><i class="fa fa-facebook-square"></i>Facebook</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['allow_twitter_login']->value) {?>
					<a href="<?php echo @constant('_URL');?>
/login.php?do=twitter" class="btn btn-twitter" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
					<a href="#" class="btn btn-google" id="google-login-btn" rel="nofollow"><i class="fa fa-google"></i> Google</a>
					<?php }?>
				</div>
				<div class="google-login-response mt-3"></div>
				<div class="clearfix"></div>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }
}
