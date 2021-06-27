<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:16
  from 'C:\xampp\htdocs\pkl\templates\apollo\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b7cc7c771_81064138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96234401abd8182d651d58e198c7018c822beac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\index.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:player.tpl' => 2,
    'file:item-video-obj.tpl' => 5,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60730b7cc7c771_81064138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkl\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"index",'tpl_name'=>"index"), 0, false);
?> 
<div class="container-fluid">
	<div class="row">
		<div class="pm-section-highlighted">
			<div class="col-md-12 p-0">
				<div id="video-wrapper">
					<div class="pm-video-watch-featured">
					<?php if ($_smarty_tpl->tpl_vars['featured_videos_total']->value == 1) {?>
						<h2 class="ml-3"><a href="<?php echo $_smarty_tpl->tpl_vars['featured_videos']->value[0]['video_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured_videos']->value[0]['video_title'];?>
</a></h2>
						<?php if ($_smarty_tpl->tpl_vars['display_preroll_ad']->value == true) {?>
							<div id="preroll_placeholder">
								<div class="preroll_countdown">
									<?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_timeleft'];?>
 <span class="preroll_timeleft"><?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['timeleft_start'];?>
</span>
								</div>
								<?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['code'];?>

								
								<?php if ($_smarty_tpl->tpl_vars['preroll_ad_data']->value['skip']) {?>
								<div class="preroll_skip_countdown">
									<?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_skip_msg'];?>
 <span class="preroll_skip_timeleft"><?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['skip_delay_seconds'];?>
</span>
								</div>
								<div class="preroll_skip_button">
								<button class="btn btn-default hide-me" id="preroll_skip_btn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['preroll_ads_skip'];?>
</button>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['preroll_ad_data']->value['disable_stats'] == 0) {?>
									<img src="<?php echo @constant('_URL');?>
/ajax.php?p=stats&do=show&aid=<?php echo $_smarty_tpl->tpl_vars['preroll_ad_data']->value['id'];?>
&at=<?php echo @constant('_AD_TYPE_PREROLL');?>
" width="1" height="1" border="0" />
								<?php }?>
							</div>
						<?php } else { ?>
							<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"index",'video_data'=>$_smarty_tpl->tpl_vars['featured_videos']->value[0]), 0, false);
?>
						<?php }?>

					<?php } elseif ($_smarty_tpl->tpl_vars['featured_videos_total']->value > 1) {?>
						<h2 class="ml-3"><a href="<?php echo $_smarty_tpl->tpl_vars['featured_videos']->value[0]['video_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured_videos']->value[0]['video_title'];?>
</a></h2>
							<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"index",'video_data'=>$_smarty_tpl->tpl_vars['featured_videos']->value[0]), 0, true);
?>
						<div class="clearfix"></div>
					<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="content" class="pt-0">
	<div class="container">
	<?php if ($_smarty_tpl->tpl_vars['featured_videos_total']->value > 2) {?>
	<div class="row pm-featured-list-row">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['_feat'];?>
</h2>
				<div class="btn-group btn-group-sort">
				<button class="btn btn-xs" id="pm-slide-prev_featured"><i class="fa fa-chevron-left"></i></button>
				<button class="btn btn-xs" id="pm-slide-next_featured"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div id="">
			<!-- Carousel items -->
				<ul class="pm-ul-carousel-videos list-inline" data-slider-id="featured" data-slides="5" id="pm-carousel_featured">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_videos']->value, 'video_data', false, 'k', 'featured_videos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
						<li class="col-xs-2 col-sm-2 col-md-6">
							<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'medium'), 0, true);
?>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div><!-- #pm-slider -->
		</div>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['total_playingnow']->value > 0) {?>
	<div class="row pm-vbwrn-list-row">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['vbwrn'];?>
</h2>
				<div class="btn-group btn-group-sort">
				<button class="btn btn-xs" id="pm-slide-prev_vbwrn"><i class="fa fa-chevron-left"></i></button>
				<button class="btn btn-xs" id="pm-slide-next_vbwrn"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div id="">
			<!-- Carousel items -->
				<ul class="pm-ul-carousel-videos list-inline" data-slider-id="vbwrn" data-slides="5" id="pm-carousel_vbwrn">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playingnow']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
						<li class="col-xs-2 col-sm-2 col-md-6">
							<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div><!-- #pm-slider -->
		</div>
	</div>
	<?php }?>

	<div class="row">
		<div class="col-md-8">
			<div class="pm-section-head">
				<h2><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['new_videos'];?>
</a></h2>
			</div>
			<ul class="pm-ul-browse-videos list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_videos']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
				<li class="col-xs-6 col-sm-6 col-md-4">
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
			</ul>
			<div class="clearfix"></div>
		</div><!-- .col-md-8 -->

		<div class="col-md-4 col-md-sidebar">
			<?php if ($_smarty_tpl->tpl_vars['ad_5']->value != '') {?>
			<div class="widget">
				<div class="pm-section-head">
					<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['_advertisment'])===null||$tmp==='' ? 'Advertisment' : $tmp);?>
</h2>
				</div>
				<div class="pm-ads-banner" align="center"><?php echo $_smarty_tpl->tpl_vars['ad_5']->value;?>
</div>
			</div><!-- .widget -->
			<?php }?>

			<div class="widget">
			<div class="pm-section-head">
				<h2><a href="<?php echo @constant('_URL');?>
/topvideos.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_m_videos'];?>
</a></h2>
			</div>
			<ul class="row pm-ul-browse-videos list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_videos']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
				<li class="col-xs-6 col-sm-6 col-md-6">
					<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideMeta'=>'1','hideLabels'=>'1','thumbSize'=>'small'), 0, true);
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
			</ul>
			<div class="clearfix"></div>
			</div><!-- .widget -->				

			<?php if (@constant('_MOD_ARTICLE') == 1) {?>
			<div class="widget">
				<div class="pm-section-head">
					<h2><a href="<?php echo @constant('_URL');?>
/article.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['articles_latest'];?>
</a></h2>
				</div>
				<ul class="pm-sidebar-articles list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
				<li class="media<?php if ($_smarty_tpl->tpl_vars['article']->value['featured'] == '1') {?> media-featured<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['article']->value['meta']['_post_thumb_show'] != '') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="pull-left" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"><img src="<?php echo @constant('_ARTICLE_ATTACH_DIR');?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['meta']['_post_thumb_show'];?>
" align="left" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="media-object"></a>
					<?php }?>
					<div class="media-body">
						<h5 class="media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h5>
						<span class="ellipsis"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['excerpt'],130);?>
</span>
					</div>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div><!-- .widget -->
			<?php }?>		
		</div><!-- .col-md-4 -->
	</div><!-- .row -->


	<?php if (pm_count($_smarty_tpl->tpl_vars['featured_categories_data']->value) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_categories_data']->value, 'video_data_array', false, 'category_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category_id']->value => $_smarty_tpl->tpl_vars['video_data_array']->value) {
?>
		<div class="row pm-featured-cat-row">
			<div class="col-md-12">
				<?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['category_id']->value]['published_videos'] > 0) {?>
				<div class="pm-section-head">
					<h2><a href="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['category_id']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['category_id']->value]['name'];?>
</a></h2>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" data-slides="5" id="pm-carousel_<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video_data_array']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
						<li class="">
						<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div><!-- #pm-slider -->
				<?php }?>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>

	<div class="clearfix"></div>

	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"index"), 0, false);
}
}
