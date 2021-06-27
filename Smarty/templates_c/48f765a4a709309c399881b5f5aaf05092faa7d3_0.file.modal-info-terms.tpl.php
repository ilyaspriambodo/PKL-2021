<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:37:49
  from '/var/www/html/templates/apollo/modal-info-terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fd5d36d124_18008823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f765a4a709309c399881b5f5aaf05092faa7d3' => 
    array (
      0 => '/var/www/html/templates/apollo/modal-info-terms.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:terms.tpl' => 1,
  ),
),false)) {
function content_60b1fd5d36d124_18008823 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['lang']->value['toa'];?>
</h4>
			</div>
			<div class="modal-body">
				<?php if ($_smarty_tpl->tpl_vars['terms_page']->value['content'] != '') {?>
					<?php echo $_smarty_tpl->tpl_vars['terms_page']->value['content'];?>

				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender('file:terms.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }
}
