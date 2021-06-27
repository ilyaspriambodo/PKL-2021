<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:36:12
  from '/var/www/html/templates/apollo/comment-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fcfc1d9af1_61142939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22837421944abce5c03338fa3ed60ff40c45eb3e' => 
    array (
      0 => '/var/www/html/templates/apollo/comment-form.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1fcfc1d9af1_61142939 (Smarty_Internal_Template $_smarty_tpl) {
?><div name="mycommentspan" id="mycommentspan" class="hide-me"></div>
<?php if ($_smarty_tpl->tpl_vars['logged_in']->value == '1') {?>
<div class="row" id="pm-post-form">
	<div class="col-xs-2 col-sm-1 col-md-1">
		<span class="pm-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['s_avatar_url']->value;?>
" class="pm-round-avatar" height="40" width="40" alt=""></span>
	</div>
	<div class="col-xs-10 col-sm-11 col-md-11">
	<form action="" name="form-user-comment" method="post">
		<div class="form-group">
			<?php if ($_smarty_tpl->tpl_vars['allow_emojis']->value && ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch-episode' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'channel')) {?>
			<a data-toggle="modal" data-remote="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/emoji-help.php" href="#" data-target="#modalEmojiList" class="emoji-shortcut"><i class="mico mico-tag_faces"></i></a>
			<?php }?>
			<textarea name="comment_txt" id="c_comment_txt" rows="2" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['your_comment'];?>
"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" id="c_vid" name="vid" value="<?php echo $_smarty_tpl->tpl_vars['uniq_id']->value;?>
">
			<input type="hidden" id="c_user_id" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
			<button type="submit" id="c_submit" name="Submit" class="btn btn-sm btn-success btn-with-loader" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_comment'];?>
</button>
		</div>
	</form>
	</div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['logged_in']->value == 0 && $_smarty_tpl->tpl_vars['guests_can_comment']->value == 1) {?>
<div class="row" id="pm-post-form">
	<div class="col-xs-2 col-sm-1 col-md-1">
		<span class="pm-avatar"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/pm-avatar.png" class="pm-round-avatar" width="40" height="40" alt="" border="0"></span>
	</div>
	<div class="col-xs-10 col-sm-11 col-md-11">
		<form action="" name="form-user-comment" method="post">
		<div class="form-group">
			<div class="row">
				<div class="col-md-11">
					<textarea name="comment_txt" id="c_comment_txt" rows="2" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['your_comment'];?>
"></textarea>
				</div>
			</div>
		</div>
		<div class="form-group hide-me" id="pm-comment-form">
			<div class="row">
				<div class="col-md-4">
					<input type="text" id="c_username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['guestname']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
">
				</div>
				<div class="col-md-4">
					<input type="text" id="captcha" name="captcha" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_code'];?>
">
				</div>
				<div class="col-md-4">
					<img src="<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['echo_securimage_sid'][0], array( array(),$_smarty_tpl ) );?>
" id="captcha-image" alt="" width="100" height="35">
					<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('captcha-image').src = '<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=' + Math.random(); return false"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-11">
					<input type="hidden" id="c_vid" name="vid" value="<?php echo $_smarty_tpl->tpl_vars['uniq_id']->value;?>
">
					<input type="hidden" id="c_user_id" name="user_id" value="0">
					<button type="submit" id="c_submit" name="Submit" class="btn btn-sm btn-success btn-with-loader" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_comment'];?>
</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
<?php }
}
}
