<?php
/* Smarty version 3.1.33, created on 2021-06-21 20:41:05
  from '/var/www/html/templates/apollo/profile-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d096f18869a0_76198519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6f1c1653a577e72bf7ac71f79adb6b5c7f32bf' => 
    array (
      0 => '/var/www/html/templates/apollo/profile-edit.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:profile-header.tpl' => 1,
    'file:profile-edit-form.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60d096f18869a0_76198519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general",'tpl_name'=>"profile-edit"), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender("file:profile-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"profile-edit"), 0, false);
?>

<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-7 col-sm-7 col-md-10">
			<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_profile'];?>
</h1>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<small><div id="uploadProgressBar"></div></small>
					<div id="divStatus"></div>
					<ol id="uploadLog" class="list-unstyled"></ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 1) {?>
		<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ep_msg1'];?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['changed_pass']->value == 1) {?>
			<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ep_msg2'];?>
</div>
			<meta http-equiv="refresh" content="5;URL=<?php echo @constant('_URL');?>
">
			<?php }?>
		<?php $_smarty_tpl->_subTemplateRender('file:profile-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['errors']->value['failure'] != '') {?>
				<?php echo $_smarty_tpl->tpl_vars['errors']->value['failure'];?>

			<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['nr_errors']->value > 0) {?>
		<div class="alert alert-danger">
			<ul class="list-unstyled">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<?php }?> 
		<?php $_smarty_tpl->_subTemplateRender('file:profile-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php }?>
	</div><!-- #content -->
	</div><!-- .row -->
</div><!-- .container -->
		
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
