<?php
/* Smarty version 3.1.33, created on 2021-05-29 08:18:15
  from '/var/www/html/templates/apollo/modal-user-register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1f8c7691a64_92682109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5753238fbd6b2938681ce380602afc4c83846e7' => 
    array (
      0 => '/var/www/html/templates/apollo/modal-user-register.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1f8c7691a64_92682109 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="modal-register-form">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['create_account'];?>
</h4>
			</div>
			<div class="modal-body">
				<a href="<?php echo @constant('_URL');?>
/register.<?php echo @constant('_FEXT');?>
" class="btn btn-success btn-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register_with_email'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value || $_smarty_tpl->tpl_vars['allow_twitter_login']->value || $_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
				<hr />
				<div class="pm-social-accounts">
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['register_with_social'];?>
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
					<a href="#" class="btn btn-google" id="google-register-btn" rel="nofollow"><i class="fa fa-google"></i> Google</a>
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
