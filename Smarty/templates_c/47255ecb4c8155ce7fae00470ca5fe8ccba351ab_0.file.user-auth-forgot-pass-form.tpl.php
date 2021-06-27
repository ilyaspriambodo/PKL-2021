<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:37:49
  from '/var/www/html/templates/apollo/user-auth-forgot-pass-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fd5d3707c8_71153589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47255ecb4c8155ce7fae00470ca5fe8ccba351ab' => 
    array (
      0 => '/var/www/html/templates/apollo/user-auth-forgot-pass-form.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1fd5d3707c8_71153589 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="forgot-pass" id="reset-form" method="post" action="<?php echo @constant('_URL');?>
/login.php?do=forgot_pass">
    <div class="form-group">
      <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_username_or_email'];?>
</label>
      <div class="controls"><input type="text" class="form-control" name="username_email" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['inputs']->value['username_email'];?>
"></div>
    </div>
    <div class="form-group">
    <button type="submit" name="Send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
" class="btn btn-success btn-with-loader" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
</button>
    </div>
</form><?php }
}
