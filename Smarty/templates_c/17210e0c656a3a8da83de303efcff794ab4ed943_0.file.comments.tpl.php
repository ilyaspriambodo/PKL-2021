<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:30
  from 'C:\xampp\htdocs\pkl\templates\apollo\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b8ad3b571_05764818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17210e0c656a3a8da83de303efcff794ab4ed943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\comments.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comment-form.tpl' => 1,
    'file:comment-list.tpl' => 1,
    'file:comment-pagination.tpl' => 1,
  ),
),false)) {
function content_60730b8ad3b571_05764818 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['allow_comments']->value == '1') {?>

	<?php if (($_smarty_tpl->tpl_vars['comment_system_native']->value+$_smarty_tpl->tpl_vars['comment_system_facebook']->value+$_smarty_tpl->tpl_vars['comment_system_disqus']->value) > 1) {?>
	<ul class="nav nav-tabs nav-underlined">
		<?php if ($_smarty_tpl->tpl_vars['comment_system_native']->value) {?>
			<li <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'native') {?>class="active"<?php }?>><a href="#comments-native" id="nav-link-comments-native" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['comment_system_facebook']->value) {?>
			<li <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'facebook') {?>class="active"<?php }?>><a href="#comments-facebook" id="nav-link-comments-facebook" data-toggle="tab">Facebook</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['comment_system_disqus']->value) {?>
			<li <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'disqus') {?>class="active"<?php }?>><a href="#comments-disqus" id="nav-link-comments-disqus" data-toggle="tab">Disqus</a></li>
		<?php }?>
	</ul>
	<?php }?>
	<div class="tab-content pm-comments-container">
	<?php if ($_smarty_tpl->tpl_vars['comment_system_native']->value) {?>
		<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'native') {?>active<?php }?>" id="comments-native">
			<?php $_smarty_tpl->_subTemplateRender('file:comment-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && !$_smarty_tpl->tpl_vars['guests_can_comment']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['must_sign_in']->value;?>

			<?php }?>
			
			
			<div class="pm-comments comment_box">
				<?php if ($_smarty_tpl->tpl_vars['comment_count']->value == 0) {?>
					<ul class="pm-ul-comments list-unstyled">
						<li id="preview_comment" class="media"></li>
					</ul>
					<div id="be_the_first"><?php echo $_smarty_tpl->tpl_vars['lang']->value['be_the_first'];?>
</div>
				<?php } else { ?>
					<span id="comment-list-container">
						<?php $_smarty_tpl->_subTemplateRender("file:comment-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						<!-- comment pagination -->
						<?php if ($_smarty_tpl->tpl_vars['comment_pagination_obj']->value != '') {?>
							<?php $_smarty_tpl->_subTemplateRender("file:comment-pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						<?php }?>
					</span>
				<?php }?>
			</div>
		</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['comment_system_facebook']->value) {?>
		<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'facebook') {?>active<?php }?> pm-comments comment_box" id="comments-facebook">
			
			<div class="fb-comments" data-href="<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read') {
echo $_smarty_tpl->tpl_vars['article']->value['link'];
} else {
echo $_smarty_tpl->tpl_vars['video_data']->value['video_href'];
}?>" data-numposts="<?php echo $_smarty_tpl->tpl_vars['fb_comment_numposts']->value;?>
" data-order-by="<?php echo $_smarty_tpl->tpl_vars['fb_comment_sorting']->value;?>
" data-colorscheme="light" data-width="100%"></div>
			
		</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['comment_system_disqus']->value) {?>
		<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['comment_system_primary']->value == 'disqus') {?>active<?php }?> pm-comments comment_box" id="comments-disqus">
			<div id="disqus_thread"></div> 
			
			<?php echo '<script'; ?>
 type="text/javascript">
				var disqus_shortname = '<?php echo $_smarty_tpl->tpl_vars['disqus_shortname']->value;?>
'; 
				var disqus_identifier = <?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read') {?> 'article-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
' <?php } else { ?> 'video-<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
' <?php }?>;
				/* * * DON'T EDIT BELOW THIS LINE * * */
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			<?php echo '</script'; ?>
>
			
		</div>
	<?php }?>
	</div>
<?php } else { ?>
	<div><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments_disabled'];?>
</div>
<?php }
}
}
