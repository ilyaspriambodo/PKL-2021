<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:32:42
  from '/var/www/html/templates/apollo/comment-list-li-body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a68aefc6b5_35099165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ffd108c5b94bb968d2f55c3a8154b725aa5e41e' => 
    array (
      0 => '/var/www/html/templates/apollo/comment-list-li-body.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5a68aefc6b5_35099165 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="media-object">
<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_id'] == 0) {?>
	<a href="#" class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['avatar_url'];?>
" class="pm-round-avatar" height="40" width="40" alt=""></a>
<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_profile_href'];?>
" class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['avatar_url'];?>
" class="pm-round-avatar" height="40" width="40" alt=""></a>
<?php }?>
</div>

<div class="media-body<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_is_banned']) {?> media-body-banned<?php }?>">
	<div class="media-heading">
	<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_id'] == 0) {?> 
		<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['name'];?>

	<?php } else { ?> 
	<a href="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_profile_href'];?>
" class="pm-comment-user"><?php echo $_smarty_tpl->tpl_vars['comment_data']->value['name'];?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['channel_verified'] == 1) {?><a href="#" rel="tooltip" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['verified_channel'])===null||$tmp==='' ? 'Verified Channel' : $tmp);?>
"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/ico-verified.png" width="12" height="12" /></a><?php }?>

	<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_id'] > 0 && $_smarty_tpl->tpl_vars['comment_data']->value['user_id'] != $_smarty_tpl->tpl_vars['s_user_id']->value && $_smarty_tpl->tpl_vars['can_manage_comments']->value && $_smarty_tpl->tpl_vars['comment_data']->value['power'] != @constant('U_ADMIN')) {?>
		<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_is_banned']) {?>
		<button type="button" id="unban-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
" class="unban-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_id'];?>
 btn btn-xs btn-link" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_account_remove_ban'];?>
"><i class="fa fa-ban"></i></button>
		<?php } else { ?>
		<button type="button" id="ban-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
" class="ban-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_id'];?>
 btn btn-xs btn-link" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_account_add_ban'];?>
"><i class="fa fa-ban"></i></button>
		<?php }?>
	<?php }?>

	<span class="label label-danger label-banned-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_id'];?>
 <?php if (!$_smarty_tpl->tpl_vars['comment_data']->value['user_is_banned']) {?>hide-me<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_account_banned_label'];?>
</span>
	<?php }?>
	<div class="media-date"><time datetime="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['full_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment_data']->value['time_since_added'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['ago'];?>
</time></div>
	<?php if ($_smarty_tpl->tpl_vars['can_manage_comments']->value) {?><span class="pm-comment-user-ip">(<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['user_ip'];?>
)</span><?php }?>
	</div>
    <p><?php echo $_smarty_tpl->tpl_vars['comment_data']->value['comment'];?>
</p>

	<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
	<div class="media-actions" id="users-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration'] : null);?>
">
		<div class="btn-group">
			<button type="button" class="btn btn-xs btn-link <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_likes_this']) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_id'] != $_smarty_tpl->tpl_vars['s_user_id']->value) {?>id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
"<?php }?> rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_like'];?>
"><span id="comment-like-count-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['up_vote_count'] > 0) {?>
				<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['up_vote_count'];?>

			<?php }?>
			</span> <i class="fa fa-thumbs-o-up"></i>
			</button>
			<button type="button" class="btn btn-xs btn-link <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_dislikes_this']) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_id'] != $_smarty_tpl->tpl_vars['s_user_id']->value) {?>id="comment-dislike-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
"<?php }?> rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_dislike'];?>
">
			<span id="comment-dislike-count-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['comment_data']->value['down_vote_count'] > 0) {?>
				<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['down_vote_count'];?>

			<?php }?>
			</span> <i class="fa fa-thumbs-o-down"></i>
			</button>
			<button type="button" id="comment-flag-<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
" class="btn btn-xs btn-link <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['user_flagged_this']) {?>active<?php }?>" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_comment'];?>
"><i class="fa fa-flag-o"></i></button>
			<?php if ($_smarty_tpl->tpl_vars['can_manage_comments']->value) {?>
			<button onclick="onpage_delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['comment_data']->value['uniq_id'];?>
', '#comment-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration'] : null);?>
'); return false;" class="btn btn-xs btn-link" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
"><i class="fa fa-trash-o"></i></button>
			<?php }?>
		</div>
	</div>
	<?php }?>
</div><?php }
}
