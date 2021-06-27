<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:31
  from 'C:\xampp\htdocs\pkl\templates\apollo\modal-video-addtoplaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b8b339f84_55681363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28eee567118329bc776a07c3327998cfeb2cc79f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\modal-video-addtoplaylist.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:video-watch-playlists.tpl' => 1,
  ),
),false)) {
function content_60730b8b339f84_55681363 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal animated fast slideInUp" id="modal-video-addtoplaylist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_to_playlist'];?>
</h4>
			</div>
			<div class="modal-body">
				<div id="pm-vc-playlists-content">
				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<div id="playlist-ajax-response" class="hide-me"></div>
				<div id="playlist-create-ajax-response" class="hide-me"></div>

				<?php $_smarty_tpl->_subTemplateRender("file:video-watch-playlists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<hr />
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['create_new_playlist'];?>
</h4>
				<div class="clear"></div>
				<form class="form-inline" role="form">
					 <div class="form-group">
								<input type="text" class="form-control" name="playlist_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_enter_name'];?>
" size="36">
						</div>
					 <div class="form-group">
						<select name="visibility" class="form-control">
								<option value="<?php echo @constant('PLAYLIST_PUBLIC');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['public'];?>
</option>
								<option value="<?php echo @constant('PLAYLIST_PRIVATE');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['private'];?>
</option>
						</select>
					 </div>
						<div class="form-group">
							<input type="hidden" name="video_id" value="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
" />
							<button type="submit" id="create_playlist_submit_btn" class="btn btn-success" onclick="playlist_create(this, 'video-watch'); return false;" disabled><?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_create_new'];?>
</button>
						</div>
				</form>
				<?php } else { ?>
				<div class="alert alert-danger">
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_msg_login_required'];?>

				</div>
				<?php }?>
				</div>                
			</div>
		</div>
	</div>
</div><?php }
}
