<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:35:22
  from '/var/www/html/templates/apollo/video-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a72ab41fb3_60671254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bdf9891ba85d8105cc8cc0d13df057047fcc5ad' => 
    array (
      0 => '/var/www/html/templates/apollo/video-category.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:item-video-obj.tpl' => 1,
    'file:item-pagination-obj.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c5a72ab41fb3_60671254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general",'tpl_name'=>"video-category"), 0, false);
?>
<div id="content">

<div id="category-header" class="container-fluid">
	<div class="pm-category-highlight">
		<h1><?php echo $_smarty_tpl->tpl_vars['gv_category_name']->value;?>
</h1>

		<div class="clearfix"></div>

		<?php if ($_smarty_tpl->tpl_vars['gv_category_description']->value) {?>
			<div class="pm-category-description">
			<?php echo $_smarty_tpl->tpl_vars['gv_category_description']->value;?>

			</div>
		<?php }?>

	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['list_subcats']->value)) {?>
	<div class="row pm-category-header-subcats">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['related_cats'];?>
</h2>
				<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_subcategories"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_subcategories"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<ul class="pm-ul-carousel-videos list-inline pm-ul-browse-subcategories thumbnails mt-3" data-slider-id="subcategories" data-slides="5" id="pm-carousel_subcategories">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_data']->value, 'category_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category_data']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>
				<li>
					<div class="pm-li-category">
						<a href="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['url'];?>
">
							<span class="pm-video-thumb pm-thumb">
								<div class="pm-thumb-fix"><span class="pm-thumb-fix-clip"><img src="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['image_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category_data']->value['attr_alt'];?>
"><span class="vertical-align"></span></span></div>
							</span>
							<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['category_data']->value['name'],32);?>
</h3>
						</a>
					</div>
				</li>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
	<?php }?>
</div>

	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">

		<?php if (!empty($_smarty_tpl->tpl_vars['results']->value)) {?>
			<div class="pm-section-head">
				<div class="btn-group btn-group-sort">
					<a class="btn btn-default" id="show-grid" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_grid'];?>
"><i class="fa fa-th"></i></a>
					<a class="btn btn-default" id="show-list" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_list'];?>
"><i class="fa fa-list"></i></a>
					<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-target="#">
					<?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == '') {
echo $_smarty_tpl->tpl_vars['lang']->value['sorting'];
}?> <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'date') {
echo $_smarty_tpl->tpl_vars['lang']->value['date'];
}
if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'views') {
echo $_smarty_tpl->tpl_vars['lang']->value['views'];
}
if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'rating') {
echo $_smarty_tpl->tpl_vars['lang']->value['rating'];
}
if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'title') {
echo $_smarty_tpl->tpl_vars['lang']->value['title'];
}?>
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php if (@constant('_SEOMOD') == '1') {?>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'date') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/browse-<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
-videos-<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
-date.html" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'views') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/browse-<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
-videos-<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
-views.html" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['views'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'rating') {?>class="active"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/browse-<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
-videos-<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
-rating.html" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rating'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'title') {?>class="active"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/browse-<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
-videos-<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
-title.html" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>
						<?php } else { ?>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'date') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
&sortby=date" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'views') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
&sortby=views" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['views'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'rating') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
&sortby=rating" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rating'];?>
</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['gv_sortby']->value == 'title') {?>class="selected"<?php }?>>
						<a href="<?php echo @constant('_URL');?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['gv_cat']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
&sortby=title" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>

			<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'video_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['video_data']->value) {
?>
				<li class="col-xs-6 col-sm-4 col-md-3">
				<?php $_smarty_tpl->_subTemplateRender('file:item-video-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<div class="clearfix"></div>

			<?php if (is_array($_smarty_tpl->tpl_vars['pagination']->value)) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:item-pagination-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_class'=>'pagination-arrows'), 0, false);
?>
			<?php }?>

		<?php } else { ?>
			<div class="row">
				<div class="col-md-12 text-center">
					<p></p>
					<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['browse_msg2'];?>
</p>
				</div>
			</div>
		<?php }?>


		</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"video-category"), 0, false);
}
}
