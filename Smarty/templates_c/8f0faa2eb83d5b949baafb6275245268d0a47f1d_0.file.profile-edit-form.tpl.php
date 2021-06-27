<?php
/* Smarty version 3.1.33, created on 2021-06-21 20:41:05
  from '/var/www/html/templates/apollo/profile-edit-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d096f18a9240_50740555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0faa2eb83d5b949baafb6275245268d0a47f1d' => 
    array (
      0 => '/var/www/html/templates/apollo/profile-edit-form.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d096f18a9240_50740555 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" name="register-form" id="register-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" role="form">
	<fieldset>
		<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_me'];?>
</h4>
		<hr>
		<div class="form-group">
			<label for="name" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="name" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['name'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['name'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['name'];?>
"<?php }?>></div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_email'];?>
 <a href="#" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['safe_email'];?>
"><i class="fa fa-question-circle"></i> </a></label>
			<div class="col-md-4">
			<input type="text" class="form-control" name="email" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['email'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['email'];?>
"<?php }?>>
			</div>
		</div>

		<div class="form-group">
			<label for="country" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
</label>
			<div class="col-md-2">
			<?php if ($_smarty_tpl->tpl_vars['show_countries_list']->value) {?>
			<select name="country" size="1" class="form-control">
			<option value="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries_list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['inputs']->value['country'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php } elseif ($_smarty_tpl->tpl_vars['userdata']->value['country'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<?php }?>
			</div>
		</div>
		
		<div class="form-group">
			<label for="aboutme" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_me'];?>
</label>
			<div class="col-md-4"><textarea name="aboutme" class="form-control" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['aboutme'])) {
echo $_smarty_tpl->tpl_vars['inputs']->value['aboutme'];
} elseif (isset($_smarty_tpl->tpl_vars['userdata']->value['about'])) {
echo $_smarty_tpl->tpl_vars['userdata']->value['about'];
}?></textarea></div>
		</div>
	</fieldset>

	<fieldset>
		<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['_social'];?>
</h4>
		<hr>
		<div class="form-group">
			<label for="website" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_social_website'];?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="website" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['website'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['website'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['social_links']['website'];?>
"<?php }?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="facebook" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_social_fb'];?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="facebook" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['facebook'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['facebook'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['social_links']['facebook'];?>
"<?php }?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="twitter" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_social_twitter'];?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="twitter" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['twitter'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['twitter'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['social_links']['twitter'];?>
"<?php }?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="instagram" class="col-md-2 control-label"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['profile_social_instagram'])===null||$tmp==='' ? 'Instagram URL' : $tmp);?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="instagram" <?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['instagram'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['instagram'];?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['social_links']['instagram'];?>
"<?php }?> placeholder="https://"></div>
		</div>
	</fieldset>

	<fieldset>
		<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['change_pass'];?>
</h4>
		<hr>
		<div class="form-group has-error">
			<label for="current_pass" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['existing_pass'];?>
</label>
			<div class="col-md-4">
			<input type="password" class="form-control" name="current_pass" maxlength="32">
			</div>
		</div>
		<div class="form-group">
			<label for="new_pass" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['new_pass'];?>
</label>
			<div class="col-md-4">
			<input type="password" class="form-control" name="new_pass" maxlength="32">
			<p class="help-block"><small><?php echo $_smarty_tpl->tpl_vars['lang']->value['ep_msg5'];?>
</small></p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
			<input type="hidden" class="form-control" name="gender" value="male">
			<button type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_save'];?>
" class="btn btn-success" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_save'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_save'];?>
</button>
			</div>
		</div>
	</fieldset>
</form><?php }
}
