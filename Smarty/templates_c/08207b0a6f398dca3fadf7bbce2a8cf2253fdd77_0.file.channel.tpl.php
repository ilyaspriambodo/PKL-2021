<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:06:48
  from '/var/www/html/templates/apollo/channel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a07829a779_20048299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08207b0a6f398dca3fadf7bbce2a8cf2253fdd77' => 
    array (
      0 => '/var/www/html/templates/apollo/channel.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:user-subscribe-button.tpl' => 2,
    'file:item-video-obj.tpl' => 1,
    'file:activity-stream.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c5a07829a779_20048299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general"), 0, false);
?>
<div id="content">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-md-12">

		<div class="pm-profile">
				<div class="pm-profile-header">
					<div class="pm-profile-cover">
						<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
						<div class="pm-profile-cover-preview" data-cropit-height="200">
							<div class="cropit-image-preview">
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['channel_cover']['max'] != '') {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['channel_cover']['max'];?>
" alt="" border="0" class="img-responsive img-channel-cover">
								<?php } else { ?>
								<img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/bg-channel-cover.png" alt="" border="0" class="img-responsive img-cover">
								<?php }?>
								<span class="pm-profile-cover-edit"><a href="#" class="btn btn-link btn-edit" id="btn-edit-cover"><i class="fa fa-pencil"></i></a></span>
							</div>

							<form action="#" class="cropit-form" id="cropit-cover-form">
								<input type="file" class="cropit-image-input" id="cropit-cover-input" />
								<input type="hidden" name="image-data" class="hidden-cover-data-img" />
								<input type="hidden" name="p" value="upload" />
								<input type="hidden" name="do" value="channel-cover" />
								<button class="btn btn-default btn-cancel"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_cancel'];?>
</button>
								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_save'];?>
</button>
							</form>
						</div>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['channel_cover']['max'] != '') {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['channel_cover']['max'];?>
" alt="" border="0" class="img-responsive img-channel-cover">
							<?php } else { ?>
							<img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/bg-channel-cover.png" alt=""  border="0" class="img-responsive img-channel-cover">
							<?php }?>
						<?php }?>

						<div class="pm-profile-avatar-pic">
							<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
							<div class="cropit-image-preview">
								<img src="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['avatar_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['username'];?>
"  border="0" class="img-responsive">
								<span class="pm-profile-avatar-edit"><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['update_avatar'];?>
" class="btn btn-link btn-edit" id="btn-edit-avatar"><i class="fa fa-pencil"></i></a></span>
							</div>
							<form action="#" class="cropit-form" id="cropit-avatar-form">
								<input type="file" class="cropit-image-input" id="cropit-avatar-input" />
								<input type="hidden" name="image-data" class="hidden-avatar-data-img" />
								<input type="hidden" name="p" value="upload" />
								<input type="hidden" name="do" value="user-avatar" />
								<button class="btn btn-default btn-cancel-avatar"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_cancel'];?>
</button>
								<button type="submit" class="btn btn-mini btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_save'];?>
</button>
							</form>
							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['username'];?>
" border="0" class="img-responsive">
							<?php }?>
						</div>
						
						<div class="pm-profile-user-info">
							<h1><?php echo $_smarty_tpl->tpl_vars['profile_data']->value['username'];?>


							<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['channel_verified'] && @constant('_MOD_SOCIAL')) {?>
							<a href="#" rel="tooltip" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['verified_channel'])===null||$tmp==='' ? 'Verified Channel' : $tmp);?>
" class="pm-verified-user"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/ico-verified.png" /></a>
							<?php }?>
							<!--<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['channel_featured'] == 1) {?><span class="label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_featured'];?>
</span><?php }?>--> 
							<?php if ($_smarty_tpl->tpl_vars['user_is_banned']->value) {?> <span class="label label-banned"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_account_banned_label'];?>
</span><?php }?>
							<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value == 1 && $_smarty_tpl->tpl_vars['s_user_id']->value != $_smarty_tpl->tpl_vars['profile_data']->value['id']) {?>
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['is_following_me']) {?>
									<span class="label label-social-follows hidden-xs"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscriber'])===null||$tmp==='' ? 'Subscriber' : $tmp);?>
</span>
								<?php }?>
							<?php }?>
							</h1>

							<div class="pm-profile-buttons hidden-xs">
								<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value == 1 && $_smarty_tpl->tpl_vars['s_user_id']->value != $_smarty_tpl->tpl_vars['profile_data']->value['id']) {?>
									<?php $_smarty_tpl->_subTemplateRender('file:user-subscribe-button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_user_id'=>$_smarty_tpl->tpl_vars['profile_data']->value['id']), 0, false);
?>
								<?php }?>
							</div>
						</div>
					</div>
				</div>

				<div class="pm-profile-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-9">
							<ul class="pm-profile-stats list-inline">
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pm_number_format'][0], array( array('number'=>$_smarty_tpl->tpl_vars['total_submissions']->value),$_smarty_tpl ) );?>
 <span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['lang']->value['videos'], 'UTF-8');?>
</span></li>
								<?php if (@constant('_MOD_SOCIAL')) {?>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pm_number_format'][0], array( array('number'=>$_smarty_tpl->tpl_vars['profile_data']->value['followers_count']),$_smarty_tpl ) );?>
 <span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['lang']->value['subscribers'], 'UTF-8');?>
</span></li>
								<?php }?>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pm_number_format'][0], array( array('number'=>$_smarty_tpl->tpl_vars['total_playlists']->value),$_smarty_tpl ) );?>
 <span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['lang']->value['_playlists'], 'UTF-8');?>
</span></li>
							</ul>
						</div>
						<div class="hidden-xs hidden-sm col-md-3">
							<?php if (pm_count($_smarty_tpl->tpl_vars['profile_data']->value['social_links']) > 0) {?>
							<ul class="pm-profile-links list-inline pull-right">
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['website'] != '') {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['website'];?>
" target="_blank" rel="nofollow"><i class="fa fa-globe"></i></a></li><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['facebook'] != '') {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['facebook'];?>
" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['twitter'] != '') {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['twitter'];?>
" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['instagram'] != '') {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['instagram'];?>
" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li><?php }?>
							</ul>
							<?php }?>
						</div>
					</div>
					<div class="clearfix"></div>
					<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['about']) {?>
						<div class="pm-profile-desc hidden-xs hidden-sm">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['profile_data']->value['about'],280);?>

						</div>
					<?php }?>
				</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="nav-responsive">
					<ul class="nav nav-tabs nav-underlined">
						<li <?php if ($_GET['view'] == 'videos' || $_GET['view'] == '') {?>class="active"<?php }?>><a href="#pm-pro-own" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>
</a></li>
						<?php if (@constant('_MOD_SOCIAL')) {?>
						<?php if ($_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['profile_data']->value['id']) {?>
							<li><a href="#pm-pro-activity-stream" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['activity_newsfeed'];?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['profile_data']->value['id'] || $_smarty_tpl->tpl_vars['profile_data']->value['am_following']) {?>
							<li><a href="#pm-pro-user-activity" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_activity'];?>
</a></li>
						<?php }?>
						<?php }?>
						<li <?php if ($_GET['view'] == 'playlists') {?>class="active"<?php }?>><a href="#pm-pro-playlists" id="pm-pro-playlists-btn" class="pm-pro-playlists-btn" data-profile-id="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['id'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_playlists'];?>
</a></li>
						<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['profile_data']->value['id']) {?>
							<li><a href="#pm-pro-followers" data-toggle="tab"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscribers'])===null||$tmp==='' ? 'Subscribers' : $tmp);?>
</a></li>
							<li><a href="#pm-pro-following" data-toggle="tab"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscribed_to'])===null||$tmp==='' ? 'Subscribed to' : $tmp);?>
</a></li>
						<?php }?>
						<li><a href="#pm-pro-about" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_about'];?>
</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-12">
		<div class="tab-content tab-content-channel">
			<div class="tab-pane fade" id="pm-pro-about">
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['_about'];?>
</h4>
				<?php if ($_smarty_tpl->tpl_vars['about']->value) {?>
				<p><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
				<?php } else { ?>
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_msg_about_empty'];?>
</p>
				<?php }?>
				<div class="clearfix"></div>

	 			<?php if (pm_count($_smarty_tpl->tpl_vars['profile_data']->value['social_links']) > 0) {?>
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['_social'];?>
</h4>
				<ul class="pm-pro-social-links list-unstyled">
					<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['website'] != '') {?> 
						<li><i class="fa fa-globe"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['website'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['website'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['facebook'] != '') {?>
						<li><i class="fa fa-facebook-square"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['facebook'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['facebook'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['twitter'] != '') {?>
						<li><i class="fa fa-twitter"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['twitter'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['twitter'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['social_links']['instagram'] != '') {?>
						<li><i class="fa fa-instagram"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['instagram'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['profile_data']->value['social_links']['instagram'];?>
</a></li> 
					<?php }?>
				</ul>
				<?php }?>
				<div class="clearfix"></div>
 			</div>

			<div class="tab-pane <?php if ($_GET['view'] == 'playlists') {?>fade in active<?php } else { ?>fade<?php }?>" id="pm-pro-playlists">
				<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_playlists'];?>
</h4>
				<?php } else { ?>
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['_playlists'];?>
</h4>
				<?php }?>
				<div id="profile-playlists-container">
					<span id="loading"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/ajax-loading.gif" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['please_wait'];?>
" align="absmiddle" border="0" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['please_wait'];?>
</span>
				</div>
			</div>

			<div class="tab-pane <?php if ($_GET['view'] == 'videos' || $_GET['view'] == '') {?>active<?php } else { ?>fade<?php }?>" id="pm-pro-own">
				<?php if ($_smarty_tpl->tpl_vars['profile_data']->value['id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
				<h4><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['your_videos'])===null||$tmp==='' ? "Your Videos" : $tmp);?>
</h4>
				<?php } else { ?>
				<h4><?php echo sprintf($_smarty_tpl->tpl_vars['lang']->value['videos_from_s'],$_smarty_tpl->tpl_vars['profile_data']->value['username']);?>
</h4>
				<?php }?>

				<ul class="row pm-ul-browse-videos list-unstyled">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submitted_video_list']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
					<li class="col-xs-6 col-sm-4 col-md-3">
						<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					</li>
					<?php
}
} else {
?>
					<li class="col-xs-12 col-sm-12 col-md-12">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos_msg2'];?>

					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php if (pm_count($_smarty_tpl->tpl_vars['submitted_video_list']->value) > 10) {?>
					<li class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail_watch_all">
							<a href="<?php echo @constant('_URL');?>
/search.php?keywords=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&btn=Search&t=user" class="btn btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_watch_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_watch_all'];?>
</a>
						</div>
					</li>
					<?php }?>
				</ul>
			</div>

			<?php if (@constant('_MOD_SOCIAL')) {?>
			<div class="tab-pane fade" id="pm-pro-followers">
				<h4><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscribers'])===null||$tmp==='' ? 'Subscribers' : $tmp);?>
</h4>
				<div id="pm-pro-followers-content" class="mt-3"></div>
			</div>
			
			<div class="tab-pane fade" id="pm-pro-following">
			<?php if (is_array($_smarty_tpl->tpl_vars['who_to_follow_list']->value)) {?>
				<h4><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['suggested_channels'])===null||$tmp==='' ? 'Suggested channels' : $tmp);?>
</h4>
				<ul class="row pm-channels-list list-unstyled mt-3">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['who_to_follow_list']->value, 'user_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user_data']->value) {
?>
				<li class="col-sm-6 col-md-4">
					<div class="pm-channel">
						<div class="pm-channel-header">
							<div class="pm-channel-cover">
								<?php if ($_smarty_tpl->tpl_vars['user_data']->value['channel_cover']['max']) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['channel_cover'][450];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
"  border="0" class="img-responsive">
								<?php }?>
							</div>
							<div class="pm-channel-profile-pic">
								<a href="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['profile_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['avatar_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
"  border="0" class="img-responsive"></a>
							</div>
						</div>
						<div class="pm-channel-body">
							<h3><a href="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['profile_url'];?>
" class="ellipsis <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_is_banned']) {?>pm-user-banned<?php }?>"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['name'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_following_me']) {?><span class="label label-sm label-success label-follow-status pull-right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscriber'])===null||$tmp==='' ? 'Subscriber' : $tmp);?>
</span><?php }?></h3>
							<div class="pm-channel-stats"> <?php echo $_smarty_tpl->tpl_vars['user_data']->value['videos_count_formatted'];?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['lang']->value['videos'], 'UTF-8');?>
 / <?php echo $_smarty_tpl->tpl_vars['user_data']->value['followers_count_formatted'];?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['lang']->value['subscribers'], 'UTF-8');?>
</div>
							<!-- <div class="pm-channel-desc"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['about'];?>
</div> -->
							<div class="pm-channel-buttons">
								<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value == '1' && $_smarty_tpl->tpl_vars['user_data']->value['id'] != $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
									<?php $_smarty_tpl->_subTemplateRender("file:user-subscribe-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'profile_user_id'=>$_smarty_tpl->tpl_vars['user_data']->value['id']), 0, true);
?>
								<?php }?>
							</div>
						</div>
					</div>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php }?>

			<h4><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['subscribed_to'])===null||$tmp==='' ? 'Subscribed to' : $tmp);?>
</h4>
			<div id="pm-pro-following-content" class="mt-3"></div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['profile_data']->value['id'] || $_smarty_tpl->tpl_vars['profile_data']->value['am_following']) {?>
			<div class="tab-pane fade" id="pm-pro-user-activity"> 
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_activity'];?>
</h4>
				<div id="pm-pro-user-activity-content"></div>
			</div>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['s_user_id']->value == $_smarty_tpl->tpl_vars['profile_data']->value['id']) {?>
			<div class="tab-pane fade" id="pm-pro-activity-stream">
				<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['activity_newsfeed'];?>
</h4>
				<form name="user-update-status" method="post" action="" onsubmit="update_status();return false;">
					<div class="form-group">
						<textarea class="form-control" name="post-status" ></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="btn-update-status" class="btn btn-sm btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_update'];?>
</button>
					</div>
				</form>
				<div id="pm-pro-activity-stream-content">
					<?php $_smarty_tpl->_subTemplateRender('file:activity-stream.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			</div>
			<?php }?>
			<?php }?>
		  </div><!-- /tab-content -->
		</div>
		<input type="hidden" name="profile_user_id" value="<?php echo $_smarty_tpl->tpl_vars['profile_data']->value['id'];?>
" />
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>'channel'), 0, false);
}
}
