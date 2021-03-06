<?php
session_start();

require('config.php');
require_once(ABSPATH .'include/user_functions.php');
require_once(ABSPATH .'include/islogged.php');
require_once(ABSPATH .'include/article_functions.php');


if ($_GET['p'] != '')
{
	$page_id = (int) $_GET['p'];
}
else if ($_GET['name'] != '')
{
	$page_name = trim($_GET['name']);
	$page_name = urlencode($page_name);
}

if ( ! $page_id && ! $page_name)
{
	redirect_404();
}

$page = array();
if ($page_id)
{
	$page = get_page($page_id);
}
else
{
	$page = get_page_by_name($page_name);
}

if ($page['status'] == 0 && ! is_admin())
{
	redirect_404();
}

if (pm_count($page) == 0)
{
	$page['title'] = $lang['page_missing_title'];
	$page['content'] = $lang['page_missing_msg'];
}
else
{
	page_update_view_count($page['id']);
}

$smarty->assign('page', $page);

$smarty->assign('template_dir', $template_f);
$smarty->assign('meta_title', htmlspecialchars($page['title'], ENT_QUOTES));
$smarty->assign('meta_keywords', $page['meta_keywords']);
$smarty->assign('meta_description', $page['meta_description']);
$smarty->assign('show_addthis_widget', $config['show_addthis_widget']);

$smarty->display('page.tpl');
?>