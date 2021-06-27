<?php
/* Smarty version 3.1.33, created on 2021-06-21 17:19:57
  from '/var/www/html/templates/apollo/video-new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60d067cd8a2d24_83323682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd401edd1c2804928f52cc570d208acd3670d3d9d' => 
    array (
      0 => '/var/www/html/templates/apollo/video-new.tpl',
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
function content_60d067cd8a2d24_83323682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general",'tpl_name'=>"video-new"), 0, false);
?>
<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div id="category-header" class="container-fluid pm-new-videos-page">
					<div class="pm-category-highlight">
						<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['new_videos'];?>
</h1>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pm-section-head">
					<div class="btn-group btn-group-sort">
						<button class="btn btn-default" id="show-grid" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_grid'];?>
"><i class="fa fa-th"></i></button>
						<button class="btn btn-default" id="show-list" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['_list'];?>
"><i class="fa fa-list"></i></button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['sorting'];?>
 <span class="caret"></span>
						</button>
						<ul class="dropdown-menu scrollable-menu" role="menu">
							<li><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['any_time'];?>
</a></li>
							<li><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
?d=today"><?php echo $_smarty_tpl->tpl_vars['lang']->value['today'];?>
</a></li>
							<li><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
?d=yesterday"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yesterday'];?>
</a></li>
							<li><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
?d=month"><?php echo $_smarty_tpl->tpl_vars['lang']->value['this_month'];?>
</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

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
} else {
?>
		<li class="col-xs-12 col-sm-12 col-md-12 text-center">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos_msg2'];?>

		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<div class="clearfix"></div>

		
		<?php if ($_smarty_tpl->tpl_vars['empty_results']->value) {?>
			<p class="alert"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nv_page_sorry_msg'];?>
</p>
		<?php }?>

		<div class="clearfix"></div>
		<?php if (is_array($_smarty_tpl->tpl_vars['pagination']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:item-pagination-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_class'=>'pagination-arrows'), 0, false);
?>
		<?php }?>
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"video-new"), 0, false);
}
}
