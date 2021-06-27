<?php
/* Smarty version 3.1.33, created on 2021-05-29 15:36:12
  from '/var/www/html/templates/apollo/modal-video-share.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b1fcfc1f14f0_42919171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af996e0c607170017661919b757da390501d1c' => 
    array (
      0 => '/var/www/html/templates/apollo/modal-video-share.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1fcfc1f14f0_42919171 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-video-share" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['lang']->value['_share'];?>
</h4>
	  </div>
	  <div class="modal-body">

		<div class="row pm-modal-share">
			<div class="col-md-12 hidden-xs hidden-sm">
				<h5><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</h5>
				<div id="share-confirmation" class="hide-me alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button></div>
			</div>
			<div class="col-md-3 hidden-xs hidden-sm">
				<div class="pm-modal-video-info">
					<img src="<?php echo $_smarty_tpl->tpl_vars['facebook_image_src']->value;?>
" width="480" height="360" class="img-responsive" />
					<?php if ($_smarty_tpl->tpl_vars['meta_description']->value) {?>
						<p><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
</p>
					<?php }?>
				</div>
			</div>

			<div class="col-md-9">
				<h6><?php echo $_smarty_tpl->tpl_vars['lang']->value['share_on_social'];?>
</h6>
				<a href="https://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['facebook_like_href']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['facebook_like_title']->value;?>
" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Facebook"><i class="pm-vc-sprite facebook-icon"></i></a>
				<a href="https://twitter.com/home?status=Watching%20<?php echo $_smarty_tpl->tpl_vars['facebook_like_title']->value;?>
%20on%20<?php echo $_smarty_tpl->tpl_vars['facebook_like_href']->value;?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Twitter"><i class="pm-vc-sprite twitter-icon"></i></a>

				<h6><?php echo $_smarty_tpl->tpl_vars['lang']->value['_embed'];?>
</h6>
				<form>
				<div class="form-group">
					<div class="input-group"><span class="input-group-addon" onClick="SelectAll('pm-share-link');"><i class="fa fa-link"></i></span><input name="pm-share-link" id="pm-share-link" type="text" value="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['video_href'];
echo $_smarty_tpl->tpl_vars['episode_data']->value['video_href'];?>
" class="form-control" onClick="SelectAll('pm-share-link');"></div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['embedcode_to_share']->value) {?>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon" onClick="SelectAll('pm-embed-code');"><i class="fa fa-code"></i></span>
						<textarea name="pm-embed-code" id="pm-embed-code" rows="1" class="form-control" onClick="SelectAll('pm-embed-code');"><?php echo $_smarty_tpl->tpl_vars['embedcode_to_share']->value;?>
</textarea>
					</div>
				</div>
				<?php }?>
				</form>

				<form name="sharetofriend" action="" method="POST" class="">
				<h6>Share via Email</h6>
					<div class="form-group">
						<input type="text" id="name" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
" size="40">
					</div>
					<div class="form-group">
						<input type="text" id="email" name="email" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['friends_email'];?>
" size="50">
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
" id="securimage-share" alt="" width="100" height="35">
									<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('securimage-share').src = '<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=' + Math.random(); return false;">
									<i class="fa fa-refresh"></i>
									</button>
								</div>
							</div>
						</div>
						<?php }?>
						<input type="hidden" name="p" value="detail">
						<input type="hidden" name="do" value="share">
						<input type="hidden" name="vid" value="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];
echo $_smarty_tpl->tpl_vars['episode_data']->value['uniq_id'];?>
">
					<div class="form-group">
						<button type="submit" name="Submit" class="btn btn-sm btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send'];?>
</button>
					</div>
				</form>
			</div>
		</div>
	  </div>
	</div>
  </div>
</div><?php }
}
