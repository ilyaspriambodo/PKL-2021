<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:43:04
  from '/var/www/html/templates/apollo/suggest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a8f813ac90_02960734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf6a93b2cb3cdf7f6147b9898232a1e6d66b6f6' => 
    array (
      0 => '/var/www/html/templates/apollo/suggest.tpl',
      1 => 1557149682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:profile-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c5a8f813ac90_02960734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_index'=>'1','p'=>"suggest",'tpl_name'=>"suggest"), 0, false);
$_smarty_tpl->_subTemplateRender("file:profile-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"suggest"), 0, false);
?>

<div id="content" class="content-detached">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-md-12">
			<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 3) {?>
			<div class="alert alert-info">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_msg1'];?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 4) {?>
			<div class="alert alert-info">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_msg2'];?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 5) {?>
			<div class="alert alert-danger">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_msg3'];?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 1) {?>
			<div class="alert alert-success">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_msg4'];?>

			<a href="suggest.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_another_one'];?>
</a> | <a href="index.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['return_home'];?>
</a>
			</div>
		<?php } else { ?>
		
		<?php if (pm_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
		<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<ul class="list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
		</div>
		<?php }?>

		<div class="alert alert-warning hide-me" id="ajax-error-placeholder"></div>
		<div class="alert alert-success hide-me" id="ajax-success-placeholder"></div>

		<form class="form-horizontal" id="suggest-form" name="suggest-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
">
			<fieldset>
				<div class="form-group has-feedback">
					<label for="pm_sources" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_videourl'];?>
</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="yt_id" value="<?php echo $_POST['yt_id'];?>
" placeholder="https://">
						<span class="form-control-feedback hide-me" id="loading-gif-top"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/ajax-loading.gif" width="" height="" alt=""></span>
					</div>
				</div>

				<div class="pm-video-manage-form hide-me" id="suggest-video-extra">
						<div class="form-group">
							<label for="video_title" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['video'];?>
</label>
							<div class="col-md-10">
							<input type="text" class="form-control" name="video_title" value="<?php echo $_POST['video_title'];?>
">
							</div>
						</div>
						<div class="form-group">
							<label for="capture" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video2'];?>
</label>
							<div class="col-md-10">
							<div id="video-thumb-placeholder"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="category" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['category'];?>
</label>
							<div class="col-md-10">
								<?php echo $_smarty_tpl->tpl_vars['categories_dropdown']->value;?>

							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</label>
							<div class="col-md-10">
								<textarea name="description" class="form-control"><?php if ($_POST['description']) {
echo $_POST['description'];
}?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="tags" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tags'];?>
 <a href="#" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_ex'];?>
"><i class="fa fa-question-circle"></i></a></label>
							<div class="col-md-10">
									<input id="tags_suggest" name="tags" type="text" class="form-control tags" value="<?php echo $_POST['tags'];?>
">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-10">
								<button class="btn btn-success" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_submit'];?>
" type="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_submit'];?>
</button> <span class="hide-me" id="loading-gif-bottom"><img src="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/img/ajax-loading.gif" width="" height="" alt=""></span>
							</div>
						</div>
				</div><!-- #suggest-video-extra -->
				<input type="hidden" name="source_id" value="-1">
				<input type="hidden" name="p" value="suggest">
				<input type="hidden" name="do" value="submitvideo">
			</fieldset>
		</form>
		<?php }?>
		</div><!-- #content -->
	</div><!-- .row -->
</div><!-- .container -->     
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"suggest"), 0, false);
}
}
