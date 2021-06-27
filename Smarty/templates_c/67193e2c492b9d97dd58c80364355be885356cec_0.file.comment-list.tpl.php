<?php
/* Smarty version 3.1.33, created on 2021-06-13 13:33:04
  from '/var/www/html/templates/apollo/comment-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c5a6a074aff8_05352809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67193e2c492b9d97dd58c80364355be885356cec' => 
    array (
      0 => '/var/www/html/templates/apollo/comment-list.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comment-list-li-body.tpl' => 2,
  ),
),false)) {
function content_60c5a6a074aff8_05352809 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="pm-ul-comments list-unstyled<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read') {?> article-comments<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch-episode') {?> video-comments<?php }?>">
	<?php if (is_array($_smarty_tpl->tpl_vars['most_liked_comment']->value)) {?>
	<li id="comment-999" class="media pm-top-comment">
		<div class="label-top-comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_comment'];?>
</div>
		<?php $_smarty_tpl->_subTemplateRender('file:comment-list-li-body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('comment_data'=>$_smarty_tpl->tpl_vars['most_liked_comment']->value), 0, false);
?>
	</li>
	<?php }?>
	<li id="preview_comment" class="media"></li>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_list']->value, 'comment_data', false, 'k', 'comment_foreach', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment_data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration']++;
?>
	<li id="comment-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comment_foreach']->value['iteration'] : null);?>
" class="media <?php if ($_smarty_tpl->tpl_vars['comment_data']->value['downvoted']) {?>pm-downvoted-comment<?php }?>">
		<?php $_smarty_tpl->_subTemplateRender('file:comment-list-li-body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
