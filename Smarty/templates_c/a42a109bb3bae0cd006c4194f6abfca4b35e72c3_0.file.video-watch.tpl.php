<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:29
  from 'C:\xampp\htdocs\pkl\templates\apollo\video-watch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b89578599_46993378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a42a109bb3bae0cd006c4194f6abfca4b35e72c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\video-watch.tpl',
      1 => 1557298443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:player.tpl' => 1,
    'file:widget-socialite.tpl' => 1,
    'file:user-subscribe-button.tpl' => 1,
    'file:comments.tpl' => 1,
    'file:modal-video-report.tpl' => 1,
    'file:modal-video-addtoplaylist.tpl' => 1,
    'file:modal-video-share.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60730b89578599_46993378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkl\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\pkl\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"detail",'tpl_name'=>"video-watch"), 0, false);
?>
<div class="pm-section-highlighted">
	<div class="container-fluid">
		<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['is_admin']->value == 'yes' && $_smarty_tpl->tpl_vars['video_data']->value['in_trash']) {?>
			<div class="alert alert-warning">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['viewing_deleted_video'];?>

			</div>
			<?php }?>
			<div class="container">
				<div class="row pm-video-heading">
					<div class="col-xs-12 col-sm-12 col-md-10">
						<?php if ($_smarty_tpl->tpl_vars['video_data']->value['featured'] == 1) {?>
						<span class="label label-featured"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['featured'])===null||$tmp==='' ? 'Featured' : $tmp);?>
</span>
						<?php }?>
						<h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['video_data']->value['video_title'];?>
</h1>
						<?php if ($_smarty_tpl->tpl_vars['playlist']->value) {?><h6><?php echo sprintf((($tmp = @$_smarty_tpl->tpl_vars['lang']->value['from_playlist'])===null||$tmp==='' ? 'This video is part of the %s playlist.' : $tmp),$_smarty_tpl->tpl_vars['playlist']->value['title']);?>
</h6><?php }?>
						<meta itemprop="duration" content="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['iso8601_duration'];?>
" />
						<meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['thumb_img_url'];?>
" />
						<meta itemprop="contentURL" content="<?php echo @constant('_URL2');?>
/videos.php?vid=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
" />
						<?php if ($_smarty_tpl->tpl_vars['video_data']->value['allow_embedding'] == 1) {?>
						<meta itemprop="embedURL" content="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['embed_href'];?>
" />
						<?php }?>
						<meta itemprop="uploadDate" content="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['html5_datetime'];?>
" />
					</div>
					<div class="hidden-xs hidden-sm col-md-2">
						<div class="pm-video-adjust btn-group">
							<?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['is_admin']->value == 'yes' && !$_smarty_tpl->tpl_vars['video_data']->value['in_trash']) {?>
							<a href="<?php echo @constant('_URL');?>
/<?php echo @constant('_ADMIN_FOLDER');?>
/edit-video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
" class="btn btn-sm btn-default" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['_admin_only'];?>
)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a> <a href="#" onclick="return confirm_action(pm_lang.delete_video_confirmation, '<?php echo @constant('_URL');?>
/<?php echo @constant('_ADMIN_FOLDER');?>
/edit-video.php?vid=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
&a=3'); return false;" class="btn btn-sm btn-danger" rel="tooltip" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['trash'])===null||$tmp==='' ? 'Trash' : $tmp);?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['_admin_only'];?>
)" target="_blank"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['trash'])===null||$tmp==='' ? 'Trash' : $tmp);?>
</a>
							<?php }?>
						</div>
					</div>
				</div><!-- /.pm-video-watch-heading -->

				<div class="row">
					<div id="player" class="<?php if ($_smarty_tpl->tpl_vars['ad_5']->value) {?>col-xs-12 col-sm-12 col-md-8 narrow-player<?php } else { ?>col-xs-12 col-sm-12 col-md-12 wide-player<?php }?>">
						<div id="video-wrapper">
						<?php if ($_smarty_tpl->tpl_vars['display_preroll_ad']->value == true) {?>
						<div id="preroll_placeholder">
							<div class="preroll_countdown">
							<?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_timeleft'];?>
 <span class="preroll_timeleft"><?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['timeleft_start'];?>
</span>

								<?php if ($_smarty_tpl->tpl_vars['preroll_ad_data']->value['skip']) {?>
								<div class="preroll_skip_button">
									<div class="btn btn-sm btn-success preroll_skip_countdown"  disabled="disabled" id="">
										<?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_skip'];?>
 (<span class="preroll_skip_timeleft"><?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['skip_delay_seconds'];?>
</span>)
									</div>
									<button class="btn btn-sm btn-success hide-me" id="preroll_skip_btn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_skip'];?>
</button>
								</div>
								<?php }?>

							</div>
							<?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['code'];?>

							<?php if ($_smarty_tpl->tpl_vars['preroll_ad_data']->value['disable_stats'] == 0) {?>
								<img src="<?php echo @constant('_URL');?>
/ajax.php?p=stats&do=show&aid=<?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['id'];?>
&at=<?php echo @constant('_AD_TYPE_PREROLL');?>
" width="1" height="1" border="0" />
							<?php }?>
						</div>
						<?php } else { ?>
							<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"detail"), 0, false);
?>
						<?php }?>
						</div><!--video-wrapper-->
					</div><!--/#player-->

					<?php if ($_smarty_tpl->tpl_vars['ad_5']->value) {?>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="pm-ads-banner" align="center"><?php echo $_smarty_tpl->tpl_vars['ad_5']->value;?>
</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content">
<?php if ($_smarty_tpl->tpl_vars['show_addthis_widget']->value == '1') {
$_smarty_tpl->_subTemplateRender('file:widget-socialite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div id="video-control">
	<div class="row pm-video-control">
		<div class="col-xs-4 col-sm-5 col-md-6">
			<span class="pm-video-views">
				<?php echo $_smarty_tpl->tpl_vars['video_data']->value['site_views_formatted'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['views'];?>

			</span>
			<div class="clearfix"></div>
		</div>
		<div class="col-xs-8 col-sm-7 col-md-6">
			<ul class="pm-video-main-methods list-inline pull-right nav nav-pills">
				<li>
			<button class="btn btn-video <?php if ($_smarty_tpl->tpl_vars['bin_rating_vote_value']->value == 1) {?>active<?php }?>" id="bin-rating-like" type="button" rel="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['up_vote_count_formatted'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['_likes'];?>
"><i class="mico mico-thumb_up"></i> <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['video_data']->value['up_vote_count_formatted'];?>
</span></button>
			<button class="btn btn-video <?php if ($_smarty_tpl->tpl_vars['bin_rating_vote_value']->value == 0 && $_smarty_tpl->tpl_vars['bin_rating_vote_value']->value !== false) {?>active<?php }?>" id="bin-rating-dislike" type="button" rel="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['down_vote_count_formatted'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['_dislikes'];?>
"><i class="mico mico-thumb_down"></i> <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['video_data']->value['down_vote_count_formatted'];?>
</span></button>

			<input type="hidden" name="bin-rating-uniq_id" value="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
">

			<!-- <div id="bin-rating-response" class="hide-me alert"></div> -->
			<div id="bin-rating-like-confirmation" class="hide-me alert animated fadeInDown">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_like'];?>
</p>
				<p>
				<a href="https://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['facebook_like_href']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['facebook_like_title']->value;?>
" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Facebook"><i class="pm-vc-sprite facebook-icon"></i></a>
				<a href="https://twitter.com/home?status=Watching%20<?php echo $_smarty_tpl->tpl_vars['facebook_like_title']->value;?>
%20on%20<?php echo $_smarty_tpl->tpl_vars['facebook_like_href']->value;?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Twitter"><i class="pm-vc-sprite twitter-icon"></i></a>
				</p>
			</div>

			<div id="bin-rating-dislike-confirmation" class="hide-me alert animated fadeInDown">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_dislike'];?>
</p>
			</div>
				</li>

				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<li><a href="#" id="pm-vc-playlists" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_to_playlist'];?>
" data-video-id="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
" data-toggle="modal" data-target="#modal-video-addtoplaylist"><i class="mico mico-playlist_add"></i></a></li>
				<?php }?>
				<li><a href="#" id="" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_share'];?>
" data-video-id="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
" data-toggle="modal" data-target="#modal-video-share"><i class="mico mico-share"></i></a></li>
				<li><a href="#" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_video'];?>
" data-toggle="modal" data-target="#modal-video-report"><i class="mico mico-report"></i></a></li>
			</ul>
		</div>
	</div><!--.pm-video-control-->
</div>

<div id="content-main" class="container-fluid">
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-8 pm-video-watch-main" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
			<?php if ($_smarty_tpl->tpl_vars['ad_3']->value != '') {?>
			<div class="pm-ads-banner" align="center"><?php echo $_smarty_tpl->tpl_vars['ad_3']->value;?>
</div>
			<?php }?>
	
			<div class="row pm-user-header">
				<div class="col-xs-3 col-sm-1 col-md-1">
				   <a href="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['author_profile_href'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['author_avatar_url'];?>
" class="pm-round-avatar" height="40" width="40" alt="" border="0"></a>
				</div>
				<div class="col-xs-9 col-sm-8 col-md-8">
					<div class="pm-video-posting-info">
						<div class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['author_profile_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['video_data']->value['author_username'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['video_data']->value['author_data']['channel_verified'] == 1 && @constant('_MOD_SOCIAL')) {?><a href="#" rel="tooltip" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['verified_channel'])===null||$tmp==='' ? 'Verified Channel' : $tmp);?>
" class="pm-verified-user"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/ico-verified.png" /></a><?php }?></div>
						<div class="publish-date"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_published'];?>
 <time datetime="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['full_datetime'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['video_data']->value['html5_datetime'],"%b %e, %Y");?>
</time></div>
					 </div>
				</div>
				<div class="col-xs-2 col-sm-3 col-md-3">
					<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value == '1' && $_smarty_tpl->tpl_vars['video_data']->value['author_user_id'] != $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
						<div class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:user-subscribe-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_data'=>$_smarty_tpl->tpl_vars['video_data']->value,'profile_user_id'=>$_smarty_tpl->tpl_vars['video_data']->value['author_user_id']), 0, false);
?></div>
					<?php }?>
				</div>
			</div><!--/.pm-user-header-->

			<div class="clearfix"></div>
			
			<div class="pm-video-description">
				<?php if (!empty($_smarty_tpl->tpl_vars['video_data']->value['description'])) {?>
				<div itemprop="description">
					<?php echo $_smarty_tpl->tpl_vars['video_data']->value['description'];?>

				</div>
				<?php }?>

				<dl class="dl-horizontal">

					<?php if (!empty($_smarty_tpl->tpl_vars['category_name']->value)) {?>
					<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['category'];?>
</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</dd>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
					<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['tags'];?>
</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
</dd>
					<?php }?>
				</dl>
			</div>

			<?php $_smarty_tpl->_subTemplateRender("file:comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"video-watch",'allow_comments'=>$_smarty_tpl->tpl_vars['video_data']->value['allow_comments']), 0, false);
?>
		</div><!-- /pm-video-watch-main -->
		
		<div class="col-xs-12 col-sm-12 col-md-4 pm-video-watch-sidebar">
			<?php if ($_smarty_tpl->tpl_vars['playlist']->value) {?>
			<div class="pm-sidebar-playlist">
				<div class="pm-playlist-header">
					<div class="pm-playlist-name">
						<a href="#"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['playlist']->value['title'],50);?>
</a>
					</div>
					<div class="pm-playlist-data">
						<span class="pm-playlist-creator">
							<?php echo $_smarty_tpl->tpl_vars['lang']->value['_by'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['user_profile_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['user_name'];?>
</a>
						</span> 
						&ndash; 
						<span class="pm-playlist-video-count">
							<?php if ($_smarty_tpl->tpl_vars['playlist']->value['items_count'] == 1) {?>
								1 <?php echo $_smarty_tpl->tpl_vars['lang']->value['_video'];?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['playlist']->value['items_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>

							<?php }?>
						</span>
					</div>
					<div class="pm-playlist-controls">
						<a href="<?php echo $_smarty_tpl->tpl_vars['playlist_prev_url']->value;?>
" rel="nofollow"><i class="mico mico-skip_previous" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_prev_video'];?>
"></i></a> 
						<a href="<?php echo $_smarty_tpl->tpl_vars['playlist_next_url']->value;?>
" rel="nofollow"><i class="mico mico-skip_next" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_next_video'];?>
"></i></a>
						<?php if ($_smarty_tpl->tpl_vars['playlist']->value['user_id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?> 
						<a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_href'];?>
" rel="nofollow"><i class="mico mico-settings" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_settings'];?>
"></i></a>
						<?php }?>
					</div>
				</div>

				<div class="pm-video-playlist">
					<ul class="list-unstyled">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist_items']->value, 'list_video', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['list_video']->value) {
?>
						<li <?php if ($_smarty_tpl->tpl_vars['video_data']->value['id'] == $_smarty_tpl->tpl_vars['list_video']->value['id']) {?>class="pm-video-playlist-playing"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list_video']->value['playlist_video_href'];?>
" class="pm-video-playlist-href" rel="nofollow"></a>

							<span class="pm-video-index">
							<?php if ($_smarty_tpl->tpl_vars['video_data']->value['id'] == $_smarty_tpl->tpl_vars['list_video']->value['id']) {?>
								&#9658;
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>

							<?php }?>
							</span>
							<span class="pm-video-thumb pm-thumb-80">
								<span class="pm-video-li-thumb-info">
									<span class="pm-video-li-thumb-info">
										<?php if ($_smarty_tpl->tpl_vars['list_video']->value['yt_length'] > 0) {?><span class="pm-label-duration border-radius3"><?php echo $_smarty_tpl->tpl_vars['list_video']->value['duration'];?>
</span><?php }?>
									</span>
									<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
									<div class="watch-later">
										<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $_smarty_tpl->tpl_vars['list_video']->value['id'];?>
" onclick="watch_later_add(<?php echo $_smarty_tpl->tpl_vars['list_video']->value['id'];?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['watch_later'];?>
"><i class="fa fa-clock-o"></i></button>
										<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $_smarty_tpl->tpl_vars['list_video']->value['id'];?>
" onclick="watch_later_remove(<?php echo $_smarty_tpl->tpl_vars['list_video']->value['id'];?>
); return false;" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_remove_item'];?>
"><i class="fa fa-check"></i></button>
									</div>
									<?php } else { ?>
									<a class="pm-watch-later-add btn btn-xs btn-default hidden-xs" rel="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['watch_later'];?>
" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><i class="fa fa-clock-o"></i></a>
									<?php }?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['list_video']->value['playlist_video_href'];?>
" class="pm-thumb-fix pm-thumb-80" rel="nofollow">
										<span class="pm-thumb-fix-clip">
											<img src="<?php echo $_smarty_tpl->tpl_vars['list_video']->value['thumb_img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list_video']->value['video_title'];?>
" width="80">
											<span class="vertical-align"></span>
										</span>
									</a>
								</span>
							</span>
							<h3><a href="<?php echo $_smarty_tpl->tpl_vars['list_video']->value['playlist_video_href'];?>
" class="pm-title-link"  rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['list_video']->value['video_title'];?>
</a></h3>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php }?>
			
			<div class="<?php if (!$_smarty_tpl->tpl_vars['playlist']->value && $_smarty_tpl->tpl_vars['video_data']->value['video_player_autoplay_next_support']) {?>pm-related-with-autoplay<?php }?> <?php if ($_COOKIE['pm_autoplay_next'] == 'on') {?>with-highlight<?php } else { ?>without-highlight<?php }?>" id="pm-related">
				<h4><?php if ($_smarty_tpl->tpl_vars['playlist']->value) {
echo $_smarty_tpl->tpl_vars['lang']->value['tab_related'];
} else {
echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['up_next'])===null||$tmp==='' ? 'Up Next' : $tmp);
}?></h4>
				<?php if (!$_smarty_tpl->tpl_vars['playlist']->value && $_smarty_tpl->tpl_vars['video_data']->value['video_player_autoplay_next_support']) {?>
				<div class="pm-autoplay-select">
					<div class="pm-autoplay-info">
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['_autoplay'];?>
 
					</div>
					<div class="pm-autoplay-switch">
						<input type="checkbox" name="pm-autoplay-switch" class="autoplayonoff-checkbox" id="autoplayonoff" <?php if ($_COOKIE['pm_autoplay_next'] == "on") {?>checked="checked"<?php }?>>
						<label class="autoplayonoff-label" for="autoplayonoff">
							<span class="autoplayonoff-inner"></span>
							<span class="autoplayonoff-switch"></span>
						</label>
					</div>
				</div>
				<?php }?>

				<ul class="pm-ul-sidelist-videos list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_video_list']->value, 'related_video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['related_video_data']->value) {
?>
				<li>
					<div class="pm-video-thumb">
						<?php if ($_smarty_tpl->tpl_vars['related_video_data']->value['yt_length'] > 0) {?><span class="pm-label-duration"><?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['duration'];?>
</span><?php }?>
						<div class="watch-later">
							<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['id'];?>
" onclick="watch_later_add(<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['id'];?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['watch_later'];?>
"><i class="fa fa-clock-o"></i></button>
							<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['id'];?>
" onclick="watch_later_remove(<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['id'];?>
); return false;" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_remove_item'];?>
"><i class="fa fa-check"></i></button>
						</div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['video_href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['attr_alt'];?>
">
						<div class="pm-video-labels hidden-xs">
							<?php if ($_smarty_tpl->tpl_vars['related_video_data']->value['mark_new']) {?><span class="label label-new"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_new'];?>
</span><?php }?>
						</div>
						<img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/melody-lzld.png" alt="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['attr_alt'];?>
" data-echo="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['thumb_img_url'];?>
" class="img-responsive">
						</a>
					</div>
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['video_href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['attr_alt'];?>
" class="ellipsis"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['related_video_data']->value['video_title'],100);?>
</a></h3>
					<div class="pm-video-meta">
						<span class="pm-video-author"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_by'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['author_profile_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['author_username'];?>
</a></span>
						<span class="pm-video-since"><time datetime="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['full_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['time_since_added'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['ago'];?>
</time></span>
						<span class="pm-video-views"><?php echo $_smarty_tpl->tpl_vars['related_video_data']->value['views_compact'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['views'];?>
</span>
					</div>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular_video_list']->value, 'popular_video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['popular_video_data']->value) {
?>
				<li>
					<div class="pm-video-thumb">
						<?php if ($_smarty_tpl->tpl_vars['popular_video_data']->value['yt_length'] > 0) {?><span class="pm-label-duration"><?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['duration'];?>
</span><?php }?>
						<div class="watch-later">
							<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['id'];?>
" onclick="watch_later_add(<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['id'];?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['watch_later'];?>
"><i class="fa fa-clock-o"></i></button>
							<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['id'];?>
" onclick="watch_later_remove(<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['id'];?>
); return false;" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_remove_item'];?>
"><i class="fa fa-check"></i></button>
						</div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['video_href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['attr_alt'];?>
">
						<div class="pm-video-labels hidden-xs">
							<?php if ($_smarty_tpl->tpl_vars['popular_video_data']->value['mark_new']) {?><span class="label label-new"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_new'];?>
</span><?php }?>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['thumb_img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['attr_alt'];?>
" class="img-responsive"></a>
					</div>
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['video_href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['attr_alt'];?>
" class="ellipsis"><?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['video_title'];?>
</a></h3>
					<div class="pm-video-meta">
						<span class="pm-video-author"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_by'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['author_profile_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['author_username'];?>
</a></span>
						<span class="pm-video-since"><time datetime="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['html5_datetime'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['full_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['time_since_added'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['ago'];?>
</time></span>
						<span class="pm-video-views"><?php echo $_smarty_tpl->tpl_vars['popular_video_data']->value['views_compact'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['views'];?>
</span>
					</div>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if (!$_smarty_tpl->tpl_vars['related_video_list']->value && !$_smarty_tpl->tpl_vars['popular_video_list']->value) {?>
				<li>
				  <?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos_msg2'];?>

				</li>
				<?php }?>
				</ul>
			</div>
		</div><!-- /pm-video-watch-sidebar -->

		<div class="clearfix"></div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modal-video-report.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:modal-video-addtoplaylist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal-video-share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"detail",'tpl_name'=>"video-watch"), 0, false);
}
}
