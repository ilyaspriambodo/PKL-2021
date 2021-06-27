<?php
header("HTTP/1.0 404 Not Found");

session_start();
require('config.php');
require_once('include/functions.php');
require_once('include/user_functions.php');
require_once('include/islogged.php');
require_once('include/article_functions.php');

$page = array();
$page = get_page_by_name('404');

if (pm_count($page) == 0)
{
	$smarty->assign('meta_title', htmlspecialchars("404 - Not found - ". _SITENAME, ENT_QUOTES));
	$smarty->assign('template_dir', $template_f);
	$smarty->display('404.tpl');
}
else
{
	page_update_view_count($page['id']);
	$smarty->assign('page', $page);
	
	$smarty->assign('template_dir', $template_f);
	$smarty->assign('meta_title', htmlspecialchars($page['title'], ENT_QUOTES));
	$smarty->assign('meta_keywords', $page['meta_keywords']);
	$smarty->assign('meta_description', $page['meta_description']);
	
	$smarty->display('page.tpl');
}