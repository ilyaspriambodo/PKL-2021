<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:36:09
  from '/var/www/html/templates/apollo/video-search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fcf9d63227_45350639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2167fae8bce019b0414522f6eb00fdb11565cac0' => 
    array (
      0 => '/var/www/html/templates/apollo/video-search.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:item-series-obj.tpl' => 1,
    'file:item-video-obj.tpl' => 1,
    'file:item-pagination-obj.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b1fcf9d63227_45350639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general"), 0, false);
?> 
<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div id="category-header" class="container-fluid pm-search-videos-page">
					<div class="pm-category-highlight">
						<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['search_results'];
if (is_array($_smarty_tpl->tpl_vars['results']->value)) {?>: <mark><?php echo $_smarty_tpl->tpl_vars['searchstring']->value;?>
</mark><?php }?></h1>
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm col-md-4">
				<div class="pm-section-head">
					<div class="btn-group btn-group-sort">
						<button class="btn btn-default" id="show-grid" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_grid'];?>
"><i class="fa fa-th"></i></button>
						<button class="btn btn-default" id="show-list" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_list'];?>
"><i class="fa fa-list"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
	  <div class="row">
		<div class="col-md-12">

			<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>


			<?php if (pm_count($_smarty_tpl->tpl_vars['series_results']->value) > 0) {?>			
			<h2 class="my-3"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['_series'];?>
</strong> <?php if (is_array($_smarty_tpl->tpl_vars['results']->value)) {?>: <mark><?php echo $_smarty_tpl->tpl_vars['searchstring']->value;?>
</mark><?php }?></h2>

			<div class="d-flex flex-row my-3">
				<ul class="pm-ul-browse-videos pm-ul-carousel-series list-inline  my-3">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series_results']->value, 'item_data', false, 'k', 'series_results_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'poster','isObj'=>'series'), 0, true);
?>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>


			<?php if (pm_count($_smarty_tpl->tpl_vars['series_results']->value) > 0) {?>
			<hr />
			<h2 class="my-3"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>
</strong> <?php if (is_array($_smarty_tpl->tpl_vars['results']->value)) {?>: <mark><?php echo $_smarty_tpl->tpl_vars['searchstring']->value;?>
</mark><?php }?></h2>
			<?php }?>
			
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
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
