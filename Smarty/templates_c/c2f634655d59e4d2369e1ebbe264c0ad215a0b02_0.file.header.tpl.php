<?php
/* Smarty version 3.1.33, created on 2021-04-11 14:45:17
  from 'C:\xampp\htdocs\pkl\templates\apollo\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60730b7d6d7d26_05317817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f634655d59e4d2369e1ebbe264c0ad215a0b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pkl\\templates\\apollo\\header.tpl',
      1 => 1557149681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal-user-login.tpl' => 1,
    'file:modal-user-register.tpl' => 1,
    'file:modal-addvideo.tpl' => 1,
  ),
),false)) {
function content_60730b7d6d7d26_05317817 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" dir="<?php if (@constant('_IS_RTL') == '1') {?>rtl<?php } else { ?>ltr<?php }?>">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html dir="<?php if (@constant('_IS_RTL') == '1') {?>rtl<?php } else { ?>ltr<?php }?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge,chrome=1">
<?php if ($_smarty_tpl->tpl_vars['no_index']->value == '1' || @constant('_DISABLE_INDEXING') == '1') {?>
<meta name="robots" content="noindex,nofollow">
<meta name="googlebot" content="noindex,nofollow">
<?php }?>
<meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/favicon-16x16.png">
<link rel="shortcut icon" href="<?php echo @constant('_URL');?>
/templates/<?php echo @constant('_TPLFOLDER');?>
/img/favicon.ico">
<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-category") {?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" href="<?php echo @constant('_URL');?>
/rss.php?c=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-top") {?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" href="<?php echo @constant('_URL');?>
/rss.php?feed=topvideos" />
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "article-category") {?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" href="<?php echo @constant('_URL');?>
/rss.php?c=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
&feed=articles" />
<?php } else { ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" href="<?php echo @constant('_URL');?>
/rss.php" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['comment_system_facebook']->value && $_smarty_tpl->tpl_vars['fb_app_id']->value != '') {?>
<meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['fb_app_id']->value;?>
" />
<?php }?>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="//html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/bootstrap.min.css">

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/apollo.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/animate.min.css">
<?php if (@constant('_IS_RTL') == '1') {?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/bootstrap.min.rtl.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/apollo.rtl.css">
<?php }?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300,500,700|Open+Sans:400,500,700">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/custom.css">
<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch') {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['video_data']->value['video_href'];?>
"/>
<?php }
if ($_smarty_tpl->tpl_vars['allow_google_login']->value && (!$_smarty_tpl->tpl_vars['logged_in']->value)) {?>
<meta name="google-signin-client_id" content="<?php echo $_smarty_tpl->tpl_vars['oauth_google_clientid']->value;?>
">
<?php echo '<script'; ?>
 src="https://apis.google.com/js/api:client.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var gapi_clientid = "<?php echo $_smarty_tpl->tpl_vars['oauth_google_clientid']->value;?>
";
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
var MELODYURL = "<?php echo @constant('_URL');?>
";
var MELODYURL2 = "<?php echo @constant('_URL2');?>
";
var TemplateP = "<?php echo @constant('_URL');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
";
var _LOGGEDIN_ = <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>true<?php } else { ?>false<?php }?>;
 
<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'index' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch-episode') {?>

var pm_video_data = {
	
	uniq_id: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
",
	url: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['video_href'];?>
",
	duration: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['yt_length'])===null||$tmp==='' ? 0 : $tmp);?>
,
	duration_str: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['duration'];?>
",
	category: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['category'];?>
".split(','),
	category_str: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['category'];?>
",
	featured: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['featured'])===null||$tmp==='' ? 0 : $tmp);?>
,
	restricted: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['restricted'])===null||$tmp==='' ? 0 : $tmp);?>
,
	allow_comments: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['allow_comments'])===null||$tmp==='' ? 0 : $tmp);?>
,
	allow_embedding: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['allow_embedding'])===null||$tmp==='' ? 0 : $tmp);?>
,
	is_stream: <?php if ($_smarty_tpl->tpl_vars['video_data']->value['is_stream']) {?>true<?php } else { ?>false<?php }?>,
	views: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['site_views'])===null||$tmp==='' ? 0 : $tmp);?>
,
	likes: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['likes'])===null||$tmp==='' ? 0 : $tmp);?>
,
	dislikes: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['dislikes'])===null||$tmp==='' ? 0 : $tmp);?>
,
	publish_date_str: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['html5_datetime'];?>
",
	publish_date_timestamp: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['video_data']->value['added_timestamp'])===null||$tmp==='' ? 0 : $tmp);?>
,
	embed_url: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['embed_href'];?>
",
	thumb_url: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['thumb_img_url'];?>
",
	preview_image_url: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['preview_image'];?>
",
	title: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video_data']->value['video_title']);?>
',
	autoplay_next: <?php if ($_smarty_tpl->tpl_vars['video_data']->value['autoplay_next']) {?>true<?php } else { ?>false<?php }?>,
	autoplay_next_url: "<?php echo $_smarty_tpl->tpl_vars['video_data']->value['autoplay_next_url'];?>
"

}

<?php }
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
 var pm_lang = {
	lights_off: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['lights_off'];?>
",
	lights_on: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['lights_on'];?>
",
	validate_name: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_name'];?>
",
	validate_username: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_username'];?>
",
	validate_pass: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_pass'];?>
",
	validate_captcha: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_captcha'];?>
",
	validate_email: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_email'];?>
",
	validate_agree: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_agree'];?>
",
	validate_name_long: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_name_long'];?>
",
	validate_username_long: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_username_long'];?>
",
	validate_pass_long: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_pass_long'];?>
",
	validate_confirm_pass_long: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_confirm_pass_long'];?>
",
	choose_category: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['choose_category'];?>
",
	validate_select_file: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_errmsg10'];?>
",
	validate_video_title: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['validate_video_title'];?>
",
	please_wait: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['please_wait'];?>
",
	// upload video page
	swfupload_status_uploaded: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_status_uploaded'];?>
",
	swfupload_status_pending: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_status_pending'];?>
",
	swfupload_status_queued: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_status_queued'];?>
",
	swfupload_status_uploading: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_status_uploading'];?>
",
	swfupload_file: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_file'];?>
",
	swfupload_btn_select: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_btn_select'];?>
",
	swfupload_btn_cancel: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_btn_cancel'];?>
",
	swfupload_status_error: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_status_error'];?>
",
	swfupload_error_oversize: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['swfupload_error_oversize'];?>
",
	swfupload_friendly_maxsize: "<?php echo $_smarty_tpl->tpl_vars['upload_limit']->value;?>
",
	upload_errmsg2: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_errmsg2'];?>
",
	// playlist
	playlist_delete_confirm: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_delete_confirm'];?>
",
	playlist_delete_item_confirm: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['playlist_delete_item_confirm'];?>
",
	show_more: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['show_more'];?>
",
	show_less: "<?php echo $_smarty_tpl->tpl_vars['lang']->value['show_less'];?>
",
	delete_video_confirmation: "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['delete_video_confirmation'])===null||$tmp==='' ? 'Are you sure you want to delete this video?' : $tmp);?>
",
	browse_all: "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['browse_all'])===null||$tmp==='' ? 'Browse All' : $tmp);?>
"
 }
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['facebook_image_src']->value != '') {?>
		<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['facebook_image_src']->value;?>
" />
		<meta property="og:url"  content="<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read') {
echo $_smarty_tpl->tpl_vars['article']->value['link'];
} elseif (!empty($_smarty_tpl->tpl_vars['episode_data']->value)) {
echo $_smarty_tpl->tpl_vars['episode_data']->value['url'];
} else {
echo $_smarty_tpl->tpl_vars['video_data']->value['video_href'];
}?>" />
		<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read') {?>
		<meta property="og:type" content="article" />
		<?php }?>
		<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
		<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
" />
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['facebook_image_src']->value;?>
" />
		<meta property="og:image:width" content="480" />
		<meta property="og:image:height" content="360" />
		<?php if ($_smarty_tpl->tpl_vars['video_data']->value['source_id'] == $_smarty_tpl->tpl_vars['_sources']->value['localhost']['source_id']) {?>
		<link rel="video_src" href="<?php echo @constant('_URL');?>
/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['url_flv'];?>
"/>
		<meta property="og:video:url" content="<?php echo @constant('_URL');?>
/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['url_flv'];?>
" />
		<meta property="og:video:type" content="video/mp4"/>
		<link rel="video_src" href="<?php echo @constant('_URL2');?>
/videos.php?vid=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['uniq_id'];?>
"/>
		<meta property="og:video:url" content="<?php echo @constant('_URL');?>
/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['url_flv_raw'];?>
" />
		<meta property="og:video" content="<?php echo @constant('_URL');?>
/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['url_flv_raw'];?>
"> 
		<meta property="og:video:secure_url" content="<?php echo @constant('_URL');?>
/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['url_flv_raw'];?>
">
		<?php }
}?>
<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['theme_customizations']->value;?>
</style>
</head>
<?php if ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-category") {?>
<body class="video-category catid-<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
 page-<?php echo $_smarty_tpl->tpl_vars['gv_pagenumber']->value;?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-watch") {?>
<body class="video-watch videoid-<?php echo $_smarty_tpl->tpl_vars['video_data']->value['id'];?>
 author-<?php echo $_smarty_tpl->tpl_vars['video_data']->value['author_user_id'];?>
 source-<?php echo $_smarty_tpl->tpl_vars['video_data']->value['source_id'];
if ($_smarty_tpl->tpl_vars['video_data']->value['featured'] == 1) {?> featured<?php }
if ($_smarty_tpl->tpl_vars['video_data']->value['restricted'] == 1) {?> restricted<?php }?>">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "article-category") {?>
<body class="article-category catid-<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "article-read") {?>
<body class="article-read articleid-<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 author-<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
 <?php if ($_smarty_tpl->tpl_vars['article']->value['featured'] == 1) {?> featured<?php }
if ($_smarty_tpl->tpl_vars['article']->value['restricted'] == 1) {?> restricted<?php }?>">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "page") {?>
<body class="page pageid-<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
 author-<?php echo $_smarty_tpl->tpl_vars['page']->value['author'];?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-watch-episode") {?>
<body class="video-watch-episode series-<?php echo $_smarty_tpl->tpl_vars['episode_data']->value['series_id'];
if ($_smarty_tpl->tpl_vars['episode_data']->value['featured'] == 1) {?> featured<?php }
if ($_smarty_tpl->tpl_vars['episode_data']->value['restricted'] == 1) {?> restricted<?php }?>">
<?php } elseif ($_smarty_tpl->tpl_vars['tpl_name']->value == "video-series") {?>
<body class="video-series">
<?php } else { ?>
<body>
<?php }
if (($_smarty_tpl->tpl_vars['tpl_name']->value == 'article-read' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch' || $_smarty_tpl->tpl_vars['tpl_name']->value == 'video-watch-episode') && $_smarty_tpl->tpl_vars['comment_system_facebook']->value) {?>
<!-- Facebook Javascript SDK -->
<div id="fb-root"></div>

<?php echo '<script'; ?>
>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
window.fbAsyncInit = function () {
FB.init({
xfbml:false  // Will stop the fb like button from rendering automatically
});
};
<?php echo '</script'; ?>
>

<?php }
if ($_smarty_tpl->tpl_vars['maintenance_mode']->value) {?>
	<div class="alert alert-danger" align="center"><strong>Currently running in maintenance mode.</strong></div>
<?php }?>

<div class="container-fluid no-padding">
<header class="header-bg">
<div class="pm-top-head">
	<div class="row">
		<div class="col-xs-7 col-sm-4 col-md-4">
			<div class="header-logo">
			<?php if ($_smarty_tpl->tpl_vars['_custom_logo_url']->value != '') {?>
				<a href="<?php echo @constant('_URL');?>
/index.<?php echo @constant('_FEXT');?>
" rel="home"><img src="<?php echo $_smarty_tpl->tpl_vars['_custom_logo_url']->value;?>
" alt="<?php echo htmlspecialchars(@constant('_SITENAME'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars(@constant('_SITENAME'), ENT_QUOTES, 'UTF-8', true);?>
" border="0" /></a>
			<?php } else { ?>
				<h3><a href="<?php echo @constant('_URL');?>
/index.<?php echo @constant('_FEXT');?>
" rel="home"><?php echo @constant('_SITENAME');?>
</a></h3>
			<?php }?>
			</div>
		</div>
		<div class="hidden-xs col-sm-4 col-md-4" id="pm-top-search">
			<?php if ($_smarty_tpl->tpl_vars['p']->value == "article") {?>
			<form action="<?php echo @constant('_URL');?>
/article.php" method="get" id="search" class="pm-search-form" name="search" onSubmit="return validateSearch('true');">
				<div class="input-group">
					<input class="form-control" id="pm-search" size="16" name="keywords" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_search'];?>
..." x-webkit-speech speech onwebkitspeechchange="this.form.submit();">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			</form>
			<?php } else { ?>
			<form action="<?php echo @constant('_URL');?>
/search.php" method="get" id="search" class="pm-search-form" name="search" onSubmit="return validateSearch('true');">
				<div class="input-group">
					<input class="form-control" id="pm-search" size="16" name="keywords" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_search'];?>
..." x-webkit-speech="x-webkit-speech" onwebkitspeechchange="this.form.submit();" <?php if (@constant('_SEARCHSUGGEST') == 1) {?>onblur="fill();" autocomplete="off"<?php }?>>
					<input class="form-control" id="pm-video-id" size="16" name="video-id" type="hidden">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			</form>
			<div class="pm-search-suggestions hide-me">
				<ul class="pm-search-suggestions-list list-unstyled"></ul>
			</div>
			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?> 
		<div class="col-xs-5 col-sm-4 col-md-4">
			<ul class="list-inline navbar-pmuser">
				<li class="hidden-sm hidden-md hidden-lg">
					<a href="#" id="pm-top-mobile-search-show" class="" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_search'];?>
"><i class="mico mico-search"></i></a>
				</li>
				<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<li>
					<a href="#" id="pm-social-notifications-show" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['notifications'];?>
">
						<i class="mico mico-notifications_none <?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['notification_count']->value > 0) {?>mico-notifications_active<?php }?>"></i></a>
						<?php if (@constant('_MOD_SOCIAL') && $_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['notification_count']->value > 0) {?>
							<span class="badge pm-social-notifications-count"><?php echo $_smarty_tpl->tpl_vars['notification_count']->value;?>
</span>
						<?php }?>
					</a>
					<div class="hide-me animated fast absoluteSlideInUp" id="pm-social-notifications-container">
						<div id="pm-social-notifications-response"></div>
					</div>
				</li>
				<?php }?>
				<li class="nav-menu-item">
					<div class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" ><img src="<?php echo $_smarty_tpl->tpl_vars['s_avatar_url']->value;?>
" width="30" height="30" alt="" class="header-avatar"></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['profile_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
</a> 
							<a href="<?php echo @constant('_URL');?>
/edit-profile.<?php echo @constant('_FEXT');?>
" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_profile'];?>
" class="btn-nav-edit-profile"><i class="mico mico-settings md-16"></i></a></li>
							<?php if ($_smarty_tpl->tpl_vars['is_admin']->value == 'yes' || $_smarty_tpl->tpl_vars['is_moderator']->value == 'yes' || $_smarty_tpl->tpl_vars['is_editor']->value == 'yes') {?>
							<li><a href="<?php echo @constant('_URL');?>
/<?php echo @constant('_ADMIN_FOLDER');?>
/index.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_area'];?>
</a></li>
							<?php }?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['profile_url'];?>
"><?php if (@constant('_MOD_SOCIAL')) {
echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['my_channel'])===null||$tmp==='' ? 'My Channel' : $tmp);
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['my_profile'];
}?></a></li>
							<li><a href="<?php echo @constant('_URL');?>
/playlists.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_playlists'];?>
</a></li>
							<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
							<li class="visible-sm visible-xs"><a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</a></li>
							<?php }?>
							<?php if (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
							<li class="visible-sm visible-xs"><a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</a></li>
							<?php }?>
							<li><a href="<?php echo @constant('_URL');?>
/login.<?php echo @constant('_FEXT');?>
?do=logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<?php } else { ?>
		<div class="col-xs-5 col-sm-4 col-md-4">
			<ul class="list-inline navbar-pmuser">
				<li class="hidden-sm hidden-md hidden-lg"><a href="#" id="pm-top-mobile-search-show" class="" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_search'];?>
"><i class="mico mico-search"></i></a></li>
				<li><a class="btn btn-sm btn-default ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['sign_in'])===null||$tmp==='' ? 'Sign in' : $tmp);?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value != '1' && $_smarty_tpl->tpl_vars['allow_registration']->value == '1') {?>
					<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value || $_smarty_tpl->tpl_vars['allow_twitter_login']->value || $_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
					<li class="hidden-xs"><a class="btn btn-sm btn-success ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-register-form"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</a></li>
					<?php } else { ?>
					<li class="hidden-xs"><a href="<?php echo @constant('_URL');?>
/register.<?php echo @constant('_FEXT');?>
" class="btn btn-sm btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</a></li>
					<?php }?>
				<?php }?>
			</ul>
		</div>
		<?php }?>
	</div><!--.row-->
	</div><!--.pm-top-head-->

	<div class="pm-top-nav">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<ul class="nav nav-tabs">
					<li><a href="<?php echo @constant('_URL');?>
/index.<?php echo @constant('_FEXT');?>
" class="wide-nav-link hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['homepage'];?>
</a></li>
					<li class="dropdown">
					<a href="<?php echo @constant('_URL');?>
/<?php if (@constant('_SEOMOD')) {?>browse.<?php echo @constant('_FEXT');
} else { ?>category.php<?php }?>" class="dropdown-toggle wide-nav-link disabled hidden-xs hidden-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>
<b class="caret"></b></a>
					<a href="#" class="dropdown-toggle wide-nav-link disabled visible-xs visible-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videos'];?>
<b class="caret"></b></a><!--mobile-->
					<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<li class="visible-xs visible-sm"><a href="<?php echo @constant('_URL');?>
/<?php if (@constant('_SEOMOD')) {?>browse.<?php echo @constant('_FEXT');
} else { ?>category.php<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['browse_categories'])===null||$tmp==='' ? "Browse Categories" : $tmp);?>
</a></li><!--mobile-->
						<li><a href="<?php echo @constant('_URL');?>
/newvideos.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['new_videos'];?>
</a></li>
						<li><a href="<?php echo @constant('_URL');?>
/topvideos.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos'];?>
</a></li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdown_menu_video_categories'][0], array( array('max_levels'=>3),$_smarty_tpl ) );?>

					</ul>
					</li>
					
					<?php if (@constant('_MOD_SERIES') == 1) {?>
					<li class="dropdown">
						<a href="<?php echo @constant('_URL');?>
/<?php if (@constant('_SEOMOD')) {?>series/<?php } else { ?>series.php<?php }?>" class="dropdown-toggle wide-nav-link disabled hidden-xs hidden-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['_series'])===null||$tmp==='' ? "Series" : $tmp);?>
<b class="caret"></b></a>
						<a href="#" class="dropdown-toggle wide-nav-link disabled visible-xs visible-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['_series'])===null||$tmp==='' ? "Series" : $tmp);?>
<b class="caret"></b></a><!--mobile-->

						<ul class="dropdown-menu animated fast absoluteSlideInUp">
							<li class="visible-xs visible-sm"><a href="<?php echo @constant('_URL');?>
/<?php if (@constant('_SEOMOD')) {?>series/<?php } else { ?>series.php<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['browse_series'])===null||$tmp==='' ? "Browse Series" : $tmp);?>
</a></li><!--mobile-->
							<?php echo $_smarty_tpl->tpl_vars['list_genres']->value;?>

						</ul>
					</li>
					<?php }?>

					<?php if (@constant('_MOD_ARTICLE') == 1) {?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle wide-nav-link" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['articles'];?>
 <b class="caret"></b></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdown_menu_article_categories'][0], array( array('max_levels'=>3),$_smarty_tpl ) );?>

						</ul>
					</li>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
					<li class="dropdown">
						<a href="<?php echo @constant('_URL');?>
/playlists.<?php echo @constant('_FEXT');?>
" class="dropdown-toggle wide-nav-link disabled hidden-xs hidden-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_playlists'];?>
<b class="caret"></b></a>
						<a href="#" class="dropdown-toggle wide-nav-link disabled visible-xs visible-sm" data-target="#" role="button" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_playlists'];?>
<b class="caret"></b></a><!--mobile-->
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['s_user_playlists']->value, 'playlist_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['playlist_data']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['type'] == @constant('PLAYLIST_TYPE_HISTORY')) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];?>
"><i class="mico mico-hourglass_full"></i><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['type'] == @constant('PLAYLIST_TYPE_FAVORITES')) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];?>
"><i class="mico mico-favorite"></i><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['type'] == @constant('PLAYLIST_TYPE_LIKED')) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];?>
"><i class="mico mico-thumb_up"></i><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
</a></li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['type'] == @constant('PLAYLIST_TYPE_WATCH_LATER')) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];?>
"><i class="mico mico-watch_later"></i><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
</a></li>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<?php if (pm_count($_smarty_tpl->tpl_vars['s_user_playlists']->value) > 4) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['s_user_playlists']->value, 'playlist_data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['playlist_data']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['playlist_data']->value['type'] == $_smarty_tpl->tpl_vars['smary']->value['const']['PLAYLIST_TYPE_CUSTOM']) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['playlist_href'];?>
"><i class="mico mico-playlist_play"></i><?php echo $_smarty_tpl->tpl_vars['playlist_data']->value['title'];?>
</a></li>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</ul>
					</li>
					<?php }?>
				</ul>
			</div>

			<div class="hidden-xs col-sm-4 col-md-4">
				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
					<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1' && @constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
					<a class="btn btn-sm btn-primary ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-addvideo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['add_video'])===null||$tmp==='' ? 'Add Video' : $tmp);?>
</a>
					<?php } else { ?>
						<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
						<a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
" class="btn btn-sm btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</a>
						<?php } elseif (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
						<a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
" class="btn btn-sm btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</a>
						<?php }?>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
</header>


<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:modal-user-login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['allow_registration']->value == '1') {?>
	<?php $_smarty_tpl->_subTemplateRender("file:modal-user-register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}?>

<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1' && @constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
	<?php $_smarty_tpl->_subTemplateRender("file:modal-addvideo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<a id="top"></a>

<div class="mastcontent-wrap">
<?php if ($_smarty_tpl->tpl_vars['ad_1']->value != '') {?>
<div class="pm-ads-banner" align="center"><?php echo $_smarty_tpl->tpl_vars['ad_1']->value;?>
</div>
<?php }
}
}
