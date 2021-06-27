<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:31
  from 'C:\xampp\htdocs\pkl\templates\apollo\modal-video-report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b8b17af25_19660438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9edf95bba72081455a7f12705fd672753a4bd6e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\modal-video-report.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60730b8b17af25_19660438 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-video-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form name="reportvideo" action="" method="POST">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_video'];?>
</h4>
			</div>
			<div class="modal-body">
				<div id="report-confirmation" class="hide-me alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button></div>
					<input type="hidden" id="name" name="name" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {
echo $_smarty_tpl->tpl_vars['s_name']->value;
}?>">
					<input type="hidden" id="email" name="email" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {
echo $_smarty_tpl->tpl_vars['s_email']->value;
}?>">

				<div class="form-group">
						<label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form1'];?>
</label>
						<select name="reason" class="form-control">
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form1'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
</option>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form4'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form4'];?>
</option>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form5'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form5'];?>
</option>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form6'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form6'];?>
</option>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form7'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_form7'];?>
</option>
						</select>
				</div>
					
				<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6 col-sm-5 col-md-2">
							<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_comment'];?>
">
						</div>
						<div class="col-xs-6 col-sm-7 col-md-10">
							<img src="<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['echo_securimage_sid'][0], array( array(),$_smarty_tpl ) );?>
" id="securimage-report" alt="" width="100" height="35">
							<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('securimage-report').src = '<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=' + Math.random(); return false;"><i class="fa fa-refresh"></i> </button>
						</div>
					</div>
				</div>
				<?php }?>
					
				<input type="hidden" name="p" value="detail">
				<input type="hidden" name="do" value="report">
				<input type="hidden" name="vid" value="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-link" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_cancel'];?>
</button>
				<button type="submit" name="Submit" class="btn btn-sm btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['report_video'];?>
</button>
			</div>
		</div>
		</form>
	</div>
</div><?php }
}
