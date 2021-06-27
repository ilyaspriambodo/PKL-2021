<?php
/* Smarty version 3.1.33, created on 2021-06-27 06:21:59
  from '/var/www/html/templates/apollo/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d7b6973fe507_75860175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08817e4d1dce721cb9fc704980d3e1775acd9a32' => 
    array (
      0 => '/var/www/html/templates/apollo/page.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60d7b6973fe507_75860175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"page"), 0, false);
?> 
<div id="content" class="pm-text-pages">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h1>
					<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

			</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
