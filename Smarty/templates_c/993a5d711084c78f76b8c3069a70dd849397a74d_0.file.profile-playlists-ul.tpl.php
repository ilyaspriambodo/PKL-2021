<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:33:01
  from '/var/www/html/templates/apollo/profile-playlists-ul.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a69dc70974_26951101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993a5d711084c78f76b8c3069a70dd849397a74d' => 
    array (
      0 => '/var/www/html/templates/apollo/profile-playlists-ul.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5a69dc70974_26951101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<ul class="row pm-ul-browse-playlists list-unstyled mt-3">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlists']->value, 'playlist_data', false, 'k', 'playlists_foreach', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['playlist_data']->value) {
?>
		<li class="col-xs-6 col-sm-4 col-md-3">
			<div class="thumbnail">
				<div class="pm-video-thumb">
					<img src="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['thumb_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
" class="img-responsive">
					<div class="pm-pl-count"><span class="pm-pl-items"><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['items_count'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['items_count'] == 1) {
echo $_smarty_tpl->tpl_vars['lang']->value['_video'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['videos'];
}?></div> 
					<a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_watch_all_href'];?>
" class="thumbnail-overlay" rel="nofollow">&#9658; <?php echo $_smarty_tpl->tpl_vars['lang']->value['play_all'];?>
</a>
				</div>
				<div class="caption">
				<h3 class="ellipsis-line"><?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['visibility'] == @constant('PLAYLIST_PRIVATE')) {?><i class="fa fa-lock"></i> <?php }?><a href="<?php if ($_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['playlist_data']->value['user_id']) {
echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];
} else {
echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_watch_all_href'];
}?>" title="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['playlist_data']->value['title'],50);?>
</a></h3>
				<div class="pm-video-meta hidden-xs">
					<span class="pm-video-since"><time datetime="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['full_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['time_since'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['ago'];?>
</time></span>
				</div>
				</div>
			</div>
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
