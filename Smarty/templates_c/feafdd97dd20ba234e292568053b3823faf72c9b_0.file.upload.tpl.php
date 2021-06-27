<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:44:04
  from '/var/www/html/templates/apollo/upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a9342f84f8_21735848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feafdd97dd20ba234e292568053b3823faf72c9b' => 
    array (
      0 => '/var/www/html/templates/apollo/upload.tpl',
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
function content_60c5a9342f84f8_21735848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_index'=>"1",'p'=>"upload",'tpl_name'=>"upload"), 0, false);
$_smarty_tpl->_subTemplateRender("file:profile-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"upload"), 0, false);
?>
<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-12 col-sm-7 col-md-10">
			<h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</h1>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<ol id="upload-video-selected-files-container"></ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	   <div class="col-md-12">
		<?php if ($_smarty_tpl->tpl_vars['success']->value == 1) {?>
			<div class="alert alert-success">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_msg4'];?>

			<br />
			<a href="upload.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_another_one'];?>
</a> or <a href="index.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['return_home'];?>
</a>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == 2) {?>
			<div class="alert alert-warning">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_errmsg11'];?>
 
			<a href="index.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['return_home'];?>
</a>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == 'custom') {?>
			<div class="alert alert-success">
			<?php echo $_smarty_tpl->tpl_vars['success_custom_message']->value;?>
 
			<a href="upload.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_another_one'];?>
</a> or <a href="index.<?php echo @constant('_FEXT');?>
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


			<div class="hide-me" id="manage-video-ajax-message"></div>
			<div class="form-horizontal">
			<div class="pm-upload-file-select" id="upload-video-dropzone">
				<i class="mico mico-cloud_upload"></i>
				<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['drop_files'])===null||$tmp==='' ? "Drop file here" : $tmp);?>
</p>
				<div class="clearfix"></div>
				<span class="btn-upload fileinput-button">
					<span class="btn-upload-value"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video1'];?>
</span>
					<input type="file" name="video" id="upload-video-file-btn" />
				</span>
			</div>
			<div class="clearfix"></div>


			<form class="form-horizontal" name="upload-video-form" id="upload-video-form" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" role="form">
				<div class="alert alert-danger hide-me" id="error-placeholder"></div>

				<div class="pm-video-manage-form">
					<fieldset>
						<div id="upload-video-extra">
							<div class="form-group">
							  <label for="video_title" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['video'];?>
</label>
							  <div class="col-md-10">
							  <input name="video_title" type="text" value="<?php echo $_POST['video_title'];?>
" class="form-control">
							  </div>
							</div>
							<div class="form-group">
							  <label for="capture" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video2'];?>
</label>
							  <div class="col-md-10">
								<div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new thumbnail"><img data-src="" alt=" " src="" width="" height=""></div>
								  <div class="fileinput-preview fileinput-exists thumbnail"></div>
								  <div class="fileinput-buttons">
									<span class="btn btn-sm btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video1'];?>
</span>
									<span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_change'];?>
</span>
									<input type="file" name="capture" value="">
									<!-- <a href="#" class="fileinput-exists" data-dismiss="fileinput"><i class="mico mico-delete"></i></a> -->
								  </div>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label for="duration" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_duration'];?>
 <a href="#" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['duration_format'];?>
"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
							  <input name="duration" id="duration" type="text" value="<?php echo $_POST['duration'];?>
" class="form-control text-center">
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
								<textarea name="description" class="form-control" rows="3"><?php if ($_POST['description']) {
echo $_POST['description'];
}?></textarea>
							  </div>
							</div>
							<div class="form-group">
							  <label for="tags" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tags'];?>
 <a href="#" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest_ex'];?>
"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
								<span class="tagsinput">
								  <input id="tags_upload" name="tags" type="text" class="form-control tags" value="<?php echo $_POST['tags'];?>
">
								</span>
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-offset-2 col-md-10">
								<button name="Submit" type="submit" id="upload-video-submit-btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_upload'];?>
" class="btn btn-success" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_upload'];?>
</button>
								<a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
" class="btn btn-link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_cancel'];?>
</a>
							  </div>
							</div>
						</div><!-- #upload-video-extra -->
					</fieldset>

					<input type="hidden" name="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
					<input type="hidden" name="_pmnonce_t" id="upload-video-form-nonce" value="<?php echo $_smarty_tpl->tpl_vars['form_csrfguard_token']->value;?>
" />
					<input type="hidden" name="temp_id" id="temp_id" value="" />
					<input type="hidden" name="p" value="upload" />
					<input type="hidden" name="do" value="upload-media-file" />
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $_smarty_tpl->tpl_vars['max_file_size']->value;?>
">
				</div>
			</form>
		<?php }?>
		</div><!-- .col-md-12 -->
	</div><!-- .row --> 
  </div>
  </div>
  <!-- .container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"upload"), 0, false);
}
}
