<?php
/* Smarty version 3.1.33, created on 2021-06-21 20:40:50
  from '/var/www/html/templates/apollo/modal-playlist-createnew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d096e22501b6_92865884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11aa71db51320e0f4219b2055f5dfb66aae5f022' => 
    array (
      0 => '/var/www/html/templates/apollo/modal-playlist-createnew.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d096e22501b6_92865884 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="new-playlist" class="form-horizontal" method="post" action="">
<div class="modal" id="modal-new-playlist" role="dialog" aria-labelledby="new-playlist-form-label">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
			<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_create_new'];?>
</h4>
		</div>
		<div class="modal-body">
			<div id="playlist-modal-ajax-response" class="hide-me"></div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_name'];?>
</label>
				<div class="col-md-8">
				<input type="text" class="form-control"name="playlist_name" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_privacy'];?>
</label>
				<div class="col-md-8">
				<select name="visibility" class="form-control">
					<option value="<?php echo @constant('PLAYLIST_PUBLIC');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['public'];?>
</option>
					<option value="<?php echo @constant('PLAYLIST_PRIVATE');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['private'];?>
</option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_by'];?>
</label>
				<div class="col-md-8">
				<select name="sorting" class="form-control">
					<option value="default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_manual'];?>
</option>
					<option value="popular"><?php echo $_smarty_tpl->tpl_vars['lang']->value['most_popular'];?>
</option>
					<option value="date-added-desc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_added_new'];?>
</option>
					<option value="date-added-asc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_added_old'];?>
</option>
					<option value="date-published-desc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_published_new'];?>
</option>
					<option value="date-published-asc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_published_old'];?>
</option>
				</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-sm btn-link" data-dismiss="modal" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_cancel'];?>
</a>
			<a href="#" class="btn btn-sm btn-success btn-with-loader" id="create_playlist_submit_btn" onclick="playlist_create(this, 'playlists-modal'); return false;" disabled><?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_create_new'];?>
</a>
		</div>
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form><?php }
}
