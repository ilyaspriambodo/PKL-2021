<?php
/* Smarty version 3.1.33, created on 2021-06-07 23:02:55
  from '/var/www/html/templates/apollo/video-categories-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60be432f295904_46319639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81947ae669d55769b91e80f80cfd481138efa125' => 
    array (
      0 => '/var/www/html/templates/apollo/video-categories-page.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60be432f295904_46319639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general",'tpl_name'=>"video-categories-page"), 0, false);
?>
<div id="content">
	<div id="category-header" class="container-fluid">
		<div class="pm-category-highlight">
		<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['_categories'];?>
</h1>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<div class="pm-section-head">
			
		</div>

		<ul class="pm-ul-browse-categories list-unstyled thumbnails">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_data']->value, 'category_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category_data']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id'] == 0) {?>
			<li>
				<div class="pm-li-category">
				<a href="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['url'];?>
">
					<span class="pm-video-thumb pm-thumb-234 pm-thumb">
						<div class="pm-thumb-fix pm-thumb-234"><span class="pm-thumb-fix-clip"><img src="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['image_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['attr_alt'];?>
" width="234"><span class="vertical-align"></span></span></div>
					</span>
					<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['category_data']->value['name'],32);?>
</h3>
				</a>
				</div>
			</li>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"video-categories-page"), 0, false);
}
}
