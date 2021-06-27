<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:18
  from 'C:\xampp\htdocs\pkl\templates\apollo\modal-addvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b7ee4b4c9_28727688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '593546cacca0d33e93555c564ff649bf557299ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\modal-addvideo.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60730b7ee4b4c9_28727688 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-addvideo">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_video'];?>
</h4>
			</div>
			<div class="modal-body">
			<ul class="pm-addvideo-modal list-unstyled">
				<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
				<li>
				<a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
"><i class="mico mico-insert_link"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</span></a>
				</li>
				<?php }?>
				<?php if (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
				<li><a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
"><i class="mico mico-cloud_upload"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</span></a></li>
				<?php }?>
			</ul>
			</div>
		</div>
	</div>
</div><?php }
}
