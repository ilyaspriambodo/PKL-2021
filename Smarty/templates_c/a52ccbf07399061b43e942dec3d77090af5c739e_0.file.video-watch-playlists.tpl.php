<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:31
  from 'C:\xampp\htdocs\pkl\templates\apollo\video-watch-playlists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b8b485eb7_11950666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a52ccbf07399061b43e942dec3d77090af5c739e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\video-watch-playlists.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60730b8b485eb7_11950666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkl\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div id="playlist-container">
	<?php if (pm_count($_smarty_tpl->tpl_vars['my_playlists']->value) > 0) {?>
	<ul class="pm-playlist-items list-group">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_playlists']->value, 'playlist_data', false, 'index', 'my_playlists_foreach', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['playlist_data']->value) {
?>
		<li data-playlist-id="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['list_id'];?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['has_current_video']) {?> pm-playlist-item-selected<?php }?>">
		<!--<li class="pm-playlist-item-selected">-->
			<a href="#" onclick="<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['has_current_video']) {?>playlist_remove_item(<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['list_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
);<?php } else { ?>playlist_add_item(<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['list_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
);<?php }?> return false;">
				<span class="pm-playlist-response">
					<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['has_current_video']) {?>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
						<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="16" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
						</svg>
<!-- 						<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['added'];?>
</span> -->
					<?php } else { ?>
						<span class="pm-playlist-response"></span>
					<?php }?>
				</span>
				<span class="pm-playlists-name">
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['playlist_data']->value['title'],40);?>
 
				</span> 
				<span class="pm-playlist-visibility">
					<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['visibility'] == @constant('PLAYLIST_PUBLIC')) {?>
						<!--<?php echo $_smarty_tpl->tpl_vars['lang']->value['public'];?>
-->
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['visibility'] == @constant('PLAYLIST_PRIVATE')) {?>
						<span rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['private'];?>
"><i class="mico mico-lock"></i></span>
					<?php }?>
				</span>
				<span class="pm-playlists-video-count"><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['items_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>
</span>
<!-- 				<span class="pm-playlist-created">
					<time datetime="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['full_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['time_since'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['ago'];?>
</time>
				</span> -->
			</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php } else { ?>
	<img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/ajax-loading.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['please_wait'];?>
" align="absmiddle" border="0" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['please_wait'];?>

	<?php }?>
</div><?php }
}
