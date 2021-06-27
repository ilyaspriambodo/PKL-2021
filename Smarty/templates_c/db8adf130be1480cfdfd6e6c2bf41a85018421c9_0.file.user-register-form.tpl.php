<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:37:49
  from '/var/www/html/templates/apollo/user-register-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fd5d367cd0_04209561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8adf130be1480cfdfd6e6c2bf41a85018421c9' => 
    array (
      0 => '/var/www/html/templates/apollo/user-register-form.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal-info-terms.tpl' => 1,
  ),
),false)) {
function content_60b1fd5d367cd0_04209561 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['allow_registration']->value == '1') {?>
<form class="" id="register-form" name="register-form" method="post" action="<?php echo @constant('_URL');?>
/register.php">
		<div class="form-group">
			<label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
</label>
			<div class="controls"><input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['name'];?>
"></div>
		</div>
		<div class="form-group">
			<label for="username"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</label>
			<div class="controls"><input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['username'];?>
"></div>
		</div>
		<div class="form-group">
			<label for="email"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_email'];?>
</label>
			<div class="controls"><input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['email'];?>
" autocomplete="off"></div>
		</div>
		<div class="form-group">
			<label for="pass"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
</label>
			<div class="controls"><input type="password" class="form-control" id="pass" name="pass" maxlength="32" autocomplete="off"></div>
		</div>
		<div class="form-group">
			<label for="confirm_pass"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password_retype'];?>
</label>
			<div class="controls">
			<input type="password" class="form-control" id="confirm_pass" name="confirm_pass" maxlength="32">
			</div>
		</div>
		<div class="form-group">
			<label for="country"><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
</label>
			<div class="controls">
		<?php if ($_smarty_tpl->tpl_vars['show_countries_list']->value) {?>
		<select name="country" class="form-control">
		<option value="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries_list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['inputs']->value['country'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<?php }?>
		<input type="text" name="website" class="hide-me botmenot" maxlength="32">
			</div>
		</div>
	<?php if ($_smarty_tpl->tpl_vars['spambot_prevention']->value == 'securimage') {?>
		<div class="form-group">
		<div class="controls">
					<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['enter_captcha'];?>
">
					<img src="<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['echo_securimage_sid'][0], array( array(),$_smarty_tpl ) );?>
" id="captcha_image" align="absmiddle" alt="" class="img-rounded">
					<button class="btn btn-link btn-refresh" onclick="document.getElementById('captcha_image').src = '<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=' + Math.random(); return false"><i class="fa fa-refresh"></i></button>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['spambot_prevention']->value == 'recaptcha') {?>
	<div class="form-group">
		<div class="controls">
			<?php echo $_smarty_tpl->tpl_vars['recaptcha_html']->value;?>

		</div>
	</div>
	<?php }?>

	<div class="checkbox">
		<label>
		<input type="checkbox" id="agree" name="agree" <?php if ($_smarty_tpl->tpl_vars['inputs']->value['agree'] == 'on') {?>checked="checked"<?php }?>> <span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['lang']->value['i_agree_with'];?>
 <a data-toggle="modal" href="#modal-terms" id="element" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['terms_of_agreement'];?>
</a></span>
		</label>
	</div>
	<div class="form-group">
		<input type="hidden" class="form-control" name="gender" value="male">
		<button type="submit" name="Register" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
" class="btn btn-success" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</button>
	</div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:modal-info-terms.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['registration_closed'];?>

<?php }
}
}
