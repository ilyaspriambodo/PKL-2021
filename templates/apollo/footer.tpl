</div> <!--.mastcontent-wrap-->

{if $ad_6 != ''}
	<div class="pm-ads-floating-left">{$ad_6}</div>
{/if}

{if $ad_7 != ''}
	<div class="pm-ads-floating-right">{$ad_7}</div>
{/if}


</div><!--content-->
</div><!--.container-fluid no-padding-->


<div class="container-fluid container-footer">
	{if $ad_2 != ''}
	<div class="pm-ads-banner" align="center">{$ad_2}</div>
	{/if}
	<footer>
		<div class="row row-footer-vertical">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<ul class="list-inline">
					<li><a href="{$smarty.const._URL}/index.{$smarty.const._FEXT}">{$lang.homepage}</a></li>
					<li><a href="{$smarty.const._URL}/contact.{$smarty.const._FEXT}">{$lang._contact|default:'Contact'}</a></li>
					<li><a href="{$smarty.const._URL}/page.php?name=terms-toa">{$lang.toa}</a></li>
				</ul>
			</div>
			<div class="hidden-xs col-sm-6 col-md-6">
				<div class="pull-right">
				<ul class="list-inline list-social-sites">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
				</div>
			</div>
		</div>

		<div class="row row-footer-horizontal">
			<div class="col-xs-12 col-sm-12 col-md-10">
			<ul class="list-inline">
				{if $logged_in != '1' && $allow_registration == '1'}
					{if $allow_facebook_login || $allow_twitter_login}
					<li><a class="primary ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-register-form">{$lang.register}</a></li>

					{else}
					<li><a href="{$smarty.const._URL}/register.{$smarty.const._FEXT}">{$lang.register}</a></li>
					{/if}
				{/if}
				{if $logged_in == '1' && $s_power == '1'}<li><a href="{$smarty.const._URL}/{$smarty.const._ADMIN_FOLDER}/">{$lang.admin_area}</a></li>{/if}
				{if is_array($footer_page_links)}
				{foreach from=$footer_page_links key=k item=page_data}
				<li><a href="{$page_data.page_url}">{$page_data.title}</a></li>
				{/foreach}
				{/if}
			</ul>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
			{if pm_count($langs_array) > 0}
			<div class="pm-language">
				<div class="btn-group dropup pull-right">
					<a class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="#"><img src="{$langs_array.$current_lang_id.ico}" width="16" height="10" alt="{$langs_array.$current_lang_id.title}" title="{$langs_array.$current_lang_id.title}" align="texttop"> {$langs_array.$current_lang_id.title} <span class="caret"></span></a>
					<ul class="dropdown-menu pm-language-list">
					{foreach from=$langs_array item=language key=k}
					{if $k != $current_lang_id}
					<li><a href="#" title="{$language.title}" name="{$k}" id="lang_select_{$k}">{$language.title}</a></li>
					{/if}
					{/foreach}
					</ul>
				</div>
			</div>
			{/if}
			</div>
		</div>
	</footer>
</div>



{literal}
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{/literal}

{if $p == "index" ||  $tpl_name == "video-category" ||  $tpl_name == "video-series" ||  $tpl_name == "video-series-page"}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/slick.min.js"></script>
{/literal}
{/if}

<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{$smarty.const._URL}/templates/{$template_dir}{literal}/js/theme.js"></script>
<script type="text/javascript">

// $(window).scroll(function() {
//   if ($(this).scrollTop() > 1){  
//     $('header').addClass("sticky-head");
//   }
//   else {
//     $('header').removeClass("sticky-head");
//   }
// });

$(document).ready(function() { 

	$('.pm-search-form').focusin(function() {
		$(this).children('.input-group').addClass("focused");
	});
	$('.pm-search-form').focusout(function() {
		$(this).children('.input-group').removeClass("focused");
	});


  $(function() {
	$('.ripple').on('click', function (event) {
	  //event.preventDefault();
	  
	  var $div = $('<div/>'),
		  btnOffset = $(this).offset(),
			xPos = event.pageX - btnOffset.left,
			yPos = event.pageY - btnOffset.top;
	  
	  $div.addClass('ripple-effect');
	  var $ripple = $(".ripple-effect");
	  
	  $ripple.css("height", $(this).height());
	  $ripple.css("width", $(this).height());
	  $div
		.css({
		  top: yPos - ($ripple.height()/2),
		  left: xPos - ($ripple.width()/2),
		  background: $(this).data("ripple-color")
		}) 
		.appendTo($(this));

	  window.setTimeout(function(){
		$div.remove();
	  }, 2000);
	});
  });
});


$(document).ready(function() {
	echo.init({
		offset: 600,
		throttle: 200,
		unload: false,
	});


	if($('ul.pagination').length) {
		// $('ul.pagination.pagination-arrows li a').first().html("<i class='fa fa-arrow-left'></i>");
		// $('ul.pagination.pagination-arrows li a').last().html("<i class='fa fa-arrow-right'></i>");
		$('ul.pagination.pagination-arrows li a').first().html("<i class='{/literal}{if $smarty.const._IS_RTL == '1'}fa fa-arrow-right{else}fa fa-arrow-left{/if}{literal}'></i>");
		$('ul.pagination.pagination-arrows li a').last().html("<i class='{/literal}{if $smarty.const._IS_RTL == '1'}fa fa-arrow-left{else}fa fa-arrow-right{/if}{literal}'></i>");
	}

});

// In-button Feedback (Icon)
$(document).ready(function() {
	$('.btn-with-loader').on('click', function() {
		var $this = $(this);
		$this.button('Loading').prepend('<i class="btn-loader"></i>');
		setTimeout(function() {
			$this.button('reset');
		}, 2000);
	});
});
// Page Loading Feedback (Red Stripe)
$(document).ready(function() {
  $(".pm-section-highlighted, .pm-ul-browse-videos").animsition({
	linkElement: '.animsition',
	loading: false,
	timeout: true,
	timeoutCountdown: 5000,
	browser: [ 'animation-duration', '-webkit-animation-duration'],
	overlay : false,
	overlayClass : '',
	overlayParentElement : 'body',
	transition: function(url){ 
		$('header').append('<div class="pm-horizontal-loader"></div>');
		window.location.href = url; }
  });
});

// Global settings for notifications
$(document).ready(function() {
	$.notifyDefaults({
	// settings
	element: 'body',
	position: null,
	type: "info",
	allow_dismiss: true,
	newest_on_top: true,
	showProgressbar: false,
	placement: {
		from: "top", // top, bottom
		align: "right" // left, right, center
	},
	offset: {
		x: 20,
		y: 100
		},
	spacing: 10,
	z_index: 1031,
	delay: 10000,
	timer: 1000,
	url_target: '_blank',
	mouse_over: null,
	animate: {
		enter: 'animated fadeInDown',//'animated fadeIn',
		exit: 'animated fadeOutUpBig',//'animated fadeOut'
	},
	onShow: null,
	onShown: null,
	onClose: null,
	onClosed: null,
	template: '<div data-notify="container" class="growl alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message">{2}</span>' +
				'<div class="progress" data-notify="progressbar">' +
					'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
				'</div>' +
				'<a href="{3}" target="{4}" data-notify="url"></a>' +
			'</div>',
	PM_exitAnimationTimeout: 0 // PHP Melody custom settings
	});
});
</script>
{/literal}

{if $allow_google_login && (! $logged_in)}
<script src="{$smarty.const._URL}/js/google-login.js" type="text/javascript"></script>
<script type="text/javascript"> 
gapi_startApp();
</script>
{/if}

{if $smarty.const._EU_WARNING == '1'}
{literal}
<script type="text/javascript"> 
window.cookieconsent_options = {"message":"{/literal}{$lang.eu_cookie_warn_message}{literal}","dismiss":"{/literal}{$lang.i_agree}{literal}","learnMore":"{/literal}{$lang.more_info}{literal}","link":null,"theme":"cookieconsent-{/literal}{$smarty.const._EU_WARNING_POSITION}{literal}"};
</script>
<script type="text/javascript" src="{/literal}{$smarty.const._URL}/js/cookieconsent.min.js"></script>
{/if}

{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.plugins.a.js" type="text/javascript"></script>
{/literal}{if $tpl_name == "upload" || $tpl_name == "video-edit"}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.fileupload.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/upload.clone.js" type="text/javascript"></script>

<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	if (document.querySelector('.fileinput') !== null) {
		$('.fileinput').fileinput();
	}
});
</script>
{/literal}{/if}
{if $smarty.const._SEARCHSUGGEST == 1}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.typewatch.js" type="text/javascript"></script>
{/literal}{/if}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/melody.dev.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/melody.dev.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.plugins.b.js" type="text/javascript"></script>
{/literal}

{if $tpl_name == 'video-watch' || $tpl_name == 'video-watch-episode' || $tpl_name == 'article-read'}

{if $show_addthis_widget == '1'}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.socialite.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#pm-socialite').one('mouseenter', function()
	{
		Socialite.load($(this)[0]);
	});
});
</script>	
{/literal}
{/if}

{literal}
<script type="text/javascript">
$(document).ready(function(){
	$('#nav-link-comments-native').click(function(){
		$.cookie('pm_comment_view', 'native', { expires: 180, path: '/' });
	});
	$('#nav-link-comments-facebook').click(function(){
		$.cookie('pm_comment_view', 'facebook', { expires: 180, path: '/' });
		FB.XFBML.parse(document.getElementById("comments-facebook"));
	});
	$('#nav-link-comments-disqus').click(function(){
		$.cookie('pm_comment_view', 'disqus', { expires: 180, path: '/' });
	});
});
</script>
{/literal}
{/if} 

{if $p == "detail" && $playlist}
{literal}
<script type="text/javascript">
$(document).ready(function () {
	$('.pm-video-playlist').animate({
		scrollTop: $('.pm-video-playlist-playing').offset().top - $('.pm-video-playlist').offset().top + $('.pm-video-playlist').scrollTop()
	});
});
</script>
{/literal}
{/if}

{literal}
<script type="text/javascript">
$(document).ready(function() {
	$('textarea').autosize();
	//$('.fileinput').fileinput();
	$(".ellipsis").dotdotdot({
	ellipsis : '...',
	wrap : 'word',
	watch: true,
	height : 40
	});
});
</script>
{/literal}
{if $tpl_name == "suggest" || $tpl_name == "upload" || $tpl_name == "video-edit"}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#tags_suggest, #tags_upload').tagsinput({
		confirmKeys: [188, 13, 44]
	});
});
</script>
{/literal}
{/if}

{if $smarty.const._SEARCHSUGGEST == 1}
{literal}
<script type="text/javascript">
$(document).ready(function () {
// live search
$('#pm-search').typeWatch({
	callback: function() {		
	$.ajax({
		type: "POST",
		url: MELODYURL2 + "/ajax-search.php",
		data: {
			"queryString": $('#pm-search').val()
		},
		dataType: "html",
		success: function(b){
			if (b.length > 0) {
				$(".pm-search-suggestions-list").html(b);

				$(".pm-search-suggestions").show(function() {

					var $listItems = $('.pm-search-suggestions-list').find('li');

					$('#pm-search').keydown(function(e)
					{

						var key = e.keyCode,
							$selected = $listItems.filter('.selected'),
							$current;

						if ( key === 27 ) { // ESC
							$(".pm-search-suggestions").hide();
						}

						if( key == 38 || key == 40 ){ // UP/DOWN
							e.preventDefault();
						}

						if ( key != 38 && key != 40 ) return;

						$listItems.removeClass('selected');

						if ( key == 40 ) // Down key
						{
							if ( ! $selected.length || $selected.is(':last-child') ) {
								$current = $listItems.eq(0);
							}
							else {
								$current = $selected.next();
							}
						}
						else if ( key == 38 ) // Up key
						{
							if ( ! $selected.length || $selected.is(':first-child') ) {
								$current = $listItems.last();
							}
							else {
								$current = $selected.prev();
							}
						}

						$current.addClass('selected');
						$selected_url = $current.find('a').attr('href');

						$selected_id = $current.attr('data-video-id');

						($('#pm-video-id').val($selected_id));

					});

					$(document).on('click', (function(e) {
						if(e.target.className !== "pm-search-suggestions" && e.target.id !== "pm-search") {
								$(".pm-search-suggestions").hide();
						}}));
				});

			} else {
				$(".pm-search-suggestions").hide();
			}
		}
	});
},
wait: 400,
highlight: true,
captureLength: 3
});
});
</script>
{/literal}
{/if}

{if $p == "detail"}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.readmore.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function () {
	
	var pm_elastic_player = $.cookie('pm_elastic_player');
	if (pm_elastic_player == null) {
		$.cookie('pm_elastic_player', 'normal');
	}
	else if (pm_elastic_player == 'wide') {
		$('.pm-video-watch-sidebar').slideDown('slow');
		$('#player_extend').find('i').removeClass('fa-arrows-h').addClass('fa-compress');
		$('#player').addClass('watch-large');
	} else {
		$('#player').removeClass('watch-large');
	}

	$("#player_extend").click(function() {

		if ($(this).find('i').hasClass("fa-arrows-h")) {
			$(this).find('i').removeClass("fa-arrows-h").addClass("fa-compress");
		} else {
			$(this).find('i').removeClass("fa-compress").addClass("fa-arrows-h");
			$('.pm-video-watch-sidebar').slideDown(300);
		}

		$('#player').animate({
			}, 500, "linear", function() {
				$('#player').toggleClass("watch-large");
		});
		if ($.cookie('pm_elastic_player') == 'normal') {
			$.cookie('pm_elastic_player','wide');
			$('#player_extend').find('i').removeClass('fa-arrows-h').addClass('fa-compress');
		} else {
			$.cookie('pm_elastic_player', 'normal');
			$('#player_extend').find('i').removeClass('fa-compress').addClass('fa-arrows-h');
		}
		return false;
		});

	$('.pm-video-description').readmore({
		speed: 50,
		maxHeight: 100,
		moreLink: '<a href="#">' + pm_lang.show_more +'</a>',
		lessLink: '<a href="#">' + pm_lang.show_less +'</a>',
	}).autolink({
		urls: true,
		target: "_blank"
	});

});
</script>
{/literal}
{/if}
{if $p == "index" ||  $tpl_name == "video-category" ||  $tpl_name == "video-series" ||  $tpl_name == "video-series-page"}
{literal}
<script type="text/javascript">
$(document).ready(function() {
	$("ul[class^='pm-ul-carousel-videos']").each(
	function() {
		var slides_id = $(this).data("slider-id");
		var slides = $(this).data("slides");
		var video_carousel = $('#pm-carousel_' + slides_id);

		if(slides == null) {
			var slides = 4;
		}
		video_carousel.slick({
			{/literal}{if $smarty.const._IS_RTL == '1'}rtl: true,{/if}{literal}
			infinite: false,
			lazyLoad: 'ondemand',
			slidesToShow: slides, 
			slidesToScroll: slides - 1,
			prevArrow	: "#pm-slide-prev_" + slides_id,
			nextArrow	: "#pm-slide-next_" + slides_id,
			speed: 150,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
			]
		});
	});
});
</script>

<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.readmore.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
if (document.querySelector('.pm-series-description') !== null) {
	$('.pm-series-description').readmore({
		speed: 50,
		maxHeight: 100,
		moreLink: '<a href="#">' + pm_lang.show_more +'</a>',
		lessLink: '<a href="#">' + pm_lang.show_less +'</a>',
	});
}
});
</script>
{/literal}
{/if}
{if $smarty.const._MOD_SOCIAL == '1'}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/melody.social.dev.js" type="text/javascript"></script>
{/literal}
{/if}

{if $display_preroll_ad == true}
{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.timer.min.js" type="text/javascript"></script>
<script type="text/javascript">

function timer_pad(number, length) {
	var str = '' + number;
	while (str.length < length) {str = '0' + str;}
	return str;
}

var preroll_timer;
var preroll_player_called = false;
var skippable = {/literal}{if $preroll_ad_data.skip != 1}0{else}1{/if}{literal};
var skippable_timer_current = {/literal}{if $preroll_ad_data.skip_delay_seconds}{$preroll_ad_data.skip_delay_seconds}{else}0{/if}{literal} * 1000;
var preroll_disable_stats = {/literal}{if $preroll_ad_data.disable_stats == 1}1{else}0{/if}{literal};

$(document).ready(function(){
	if (skippable == 1) {
		$('#preroll_skip_btn').hide();
	}

	var preroll_timer_current = {/literal}{$preroll_ad_data.duration}{literal} * 1000;

	preroll_timer = $.timer(function(){

		var seconds = parseInt(preroll_timer_current / 1000);
		var hours = parseInt(seconds / 3600);
		var minutes = parseInt((seconds / 60) % 60);
		var seconds = parseInt(seconds % 60);

		var output = "00";
		if (hours > 0) {
			output = timer_pad(hours, 2) +":"+ timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
		} else if (minutes > 0) {
			output = timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
		} else {
			output = timer_pad(seconds, 1);
		}

		$('.preroll_timeleft').html(output);

		if (preroll_timer_current == 0 && preroll_player_called == false) {

			$.ajax({
				type: "GET",
				url: MELODYURL2 + "/ajax.php",
				dataType: "html",
				data: {
					"p": "video",
					"do": "getplayer",
					"vid": "{/literal}{$preroll_ad_player_uniq_id}{literal}",
					"aid": "{/literal}{$preroll_ad_data.id}{literal}",
					"player": "{/literal}{$preroll_ad_player_page}{literal}",
					"playlist": "{/literal}{$playlist.list_uniq_id}{literal}"
				},
				dataType: "html",
				success: function(data){
					$('#preroll_placeholder').replaceWith(data);
				}
			});

			preroll_player_called = true;
			preroll_timer.stop();
		} else {
			preroll_timer_current -= 1000;
			if(preroll_timer_current < 0) {
				preroll_timer_current = 0;
			}
		}
	}, 1000, true);

	if (skippable == 1) {

		skippable_timer = $.timer(function(){

			var seconds = parseInt(skippable_timer_current / 1000);
			var hours = parseInt(seconds / 3600);
			var minutes = parseInt((seconds / 60) % 60);
			var seconds = parseInt(seconds % 60);

			var output = "00";
			if (hours > 0) {
				output = timer_pad(hours, 2) +":"+ timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
			} else if (minutes > 0) {
				output = timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
			} else {
				output = timer_pad(seconds, 1);
			}

			$('.preroll_skip_timeleft').html(output);

			if (skippable_timer_current == 0 && preroll_player_called == false) {
				$('#preroll_skip_btn').show();
				$('.preroll_skip_countdown').hide();
				skippable_timer.stop();
			} else {
				skippable_timer_current -= 1000;
				if(skippable_timer_current < 0) {
					skippable_timer_current = 0;
				}
			}
		}, 1000, true);

		$('#preroll_skip_btn').click(function(){
			preroll_timer_current = 0;
			skippable_timer_current = 0;

			if (preroll_disable_stats == 0) {
				$.ajax({
					type: "GET",
					url: MELODYURL2 + "/ajax.php",
					dataType: "html",
					data: {
						"p": "stats",
						"do": "skip",
						"aid": "{/literal}{$preroll_ad_data.id}{literal}",
						"at": "{/literal}{$smarty.const._AD_TYPE_PREROLL}{literal}",
					},
					dataType: "html",
					success: function(data){}
				});
			}
			return false;
		});
	}
});
</script>
{/literal}
{/if}

{if $allow_emojis && ($tpl_name == 'article-read' || $tpl_name == 'video-watch' || $tpl_name == 'video-watch-episode' || $tpl_name == 'channel')} 
<!-- Emoji provided free by http://emojione.com -->
<script src="{$smarty.const._URL}/js/jquery.textcomplete.min.js"></script>
<script src="{$smarty.const._URL}/templates/{$template_dir}/js/melody.emoji.js"></script>
{literal}
<script type="text/javascript">
$(document).ready(function(){
	$('a[data-name=emjicn]').hover(function() {
		var ccc = $(this).attr("data-shortname");
		$('#emojicode').text( ccc );
	});

	$('a[data-name=emjicn]').click( function() {
			event.preventDefault();
			$('#c_comment_txt').val($('#c_comment_txt').val() + " " + ccc);
	});
});
</script>
{/literal}
{include file="modal-emoji.tpl"}
{/if}

{if $profile_data.id == $s_user_id}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.cropit.js" type="text/javascript"></script>
<script type="text/javascript"> 
$(function() {
	var cropit_avatar_notify = null;
	var cropit_cover_notify = null;
	var cropit_notify_type = 'info';
	
	// Avatar
	$('.pm-profile-avatar-pic').cropit({
		smallImage: 'allow',
		// width: {/literal}{if $smarty.const.THUMB_W_AVATAR}{$smarty.const.THUMB_W_AVATAR}{else}180{/if}{literal}, 
		// height: {/literal}{if $smarty.const.THUMB_H_AVATAR}{$smarty.const.THUMB_H_AVATAR}{else}180{/if}{literal},
		width: 120,
		height: 120,
		preview: '.pm-profile-avatar-preview',
		onImageLoading: function(){
			cropit_avatar_notify = $.notify({message: pm_lang.please_wait}, {type: cropit_notify_type});
		},
		onImageLoaded: function() {
			cropit_avatar_notify.close();
		},
		onImageError: function(){
			cropit_avatar_notify.close();
		}
	});

	$('#btn-edit-avatar').click(function() {
		$('#cropit-avatar-input').click();
		$('#cropit-avatar-form').css('visibility', 'visible');
		$('.cropit-image-preview').removeClass('animated fadeIn');
	});

	$('.btn-cancel-avatar').click(function() {
		$('.pm-profile-avatar-pic .cropit-image-preview').removeClass('cropit-image-loaded').addClass('animated fadeIn');
		$('#cropit-avatar-form').css('visibility', 'hidden');
		return false;
	});

	$('form#cropit-avatar-form').submit(function() {
		
		var image_data = $('.pm-profile-avatar-pic').cropit('export', {
			type: 'image/jpeg',
			quality: .9,
			fillBg: '#333'
		});
		
		// Move cropped image data to hidden input
		$('.hidden-avatar-data-img').val(image_data);
		
		$.ajax({
			url: MELODYURL2 + "/ajax.php",
			type: "POST",
			dataType: "json",
			data: $('#cropit-avatar-form').serialize(),
			beforeSend: function(jqXHR, settings) {
				// clean error message container
				//cropit_avatar_notify.close();
				$.notifyClose();
				cropit_avatar_notify = $.notify({message: pm_lang.swfupload_status_uploading}, {type: cropit_notify_type});
			},
		})
		.done(function(data){
			cropit_avatar_notify.close();
			if (data.success) { 
				// hide form action buttons 
				$('#cropit-avatar-form').css('visibility', 'hidden');
				
				// reset background with uploaded image 
				$('.pm-profile-avatar-pic .cropit-image-preview img').attr('src', data.file_url);
				
				// stop image movement ability
				$('.pm-profile-avatar-pic .cropit-image-preview').addClass('animated fadeIn');
				// timeout required to allow time for the uploaded image to load before removing the current image obj (and avoid a image-swapping 'glitch')
				setTimeout(function(){
					$('.pm-profile-avatar-pic .cropit-image-preview').removeClass('cropit-image-loaded')
				}, 700);
				
				// unload selected image to let the user re-select the same image
				$('.pm-profile-avatar-pic input.cropit-image-input')[0].value = null;
			}
			cropit_avatar_notify = $.notify({message: data.msg}, {type: data.alert_type});
		});

		return false;
	});
	
	var cropit_cover_height = parseInt($('.pm-profile-cover-preview').attr('data-cropit-height'));
	if ( ! cropit_cover_height) {
		cropit_cover_height = 200;
	}
		
	// Cover
	$('.pm-profile-cover-preview').cropit({
		smallImage: 'allow',
		height: cropit_cover_height,
		onImageLoading: function(){
			cropit_cover_notify = $.notify({message: pm_lang.please_wait}, {type: cropit_notify_type});
		},
		onImageLoaded: function() {
			cropit_cover_notify.close();
		},
		onImageError: function(){
			cropit_cover_notify.close();
		}
	});

	$('#btn-edit-cover').click(function() {
		$('#cropit-cover-input').click();
		$('#cropit-cover-form').css('visibility', 'visible');
		$('.cropit-image-preview').removeClass('animated fadeIn');
	});

	$('.btn-cancel').click(function() {
		$('.pm-profile-cover-preview .cropit-image-preview').removeClass('cropit-image-loaded').addClass('animated fadeIn');
		$('#cropit-cover-form').css('visibility', 'hidden');
		return false;
	});

	$('form#cropit-cover-form').submit(function() {
		
		var image_data = $('.pm-profile-cover-preview').cropit('export', {
			type: 'image/jpeg',
			quality: .9,
			fillBg: '#333'
		});
		
		// Move cropped image data to hidden input
		$('.hidden-cover-data-img').val(image_data);
		
		$.ajax({
			url: MELODYURL2 + "/ajax.php",
			type: "POST",
			dataType: "json",
			data: $('#cropit-cover-form').serialize(),
			beforeSend: function(jqXHR, settings) {
				// clean error message container
				//cropit_cover_notify.close();
				$.notifyClose();
				cropit_cover_notify = $.notify({message: pm_lang.swfupload_status_uploading}, {type: cropit_notify_type});
			},
		})
		.done(function(data){
			cropit_cover_notify.close();
			if (data.success) { 
				// hide form action buttons 
				$('#cropit-cover-form').css('visibility', 'hidden');
				
				// reset background with uploaded image 
				$('.pm-profile-cover-preview .cropit-image-preview img').attr('src', data.file_url);
				
				// stop image movement ability
				$('.pm-profile-cover-preview .cropit-image-preview').addClass('animated fadeIn');
				// timeout required to allow time for the uploaded image to load before removing the current image obj (and avoid a image-swapping 'glitch')
				setTimeout(function(){
					$('.pm-profile-cover-preview .cropit-image-preview').removeClass('cropit-image-loaded')
				}, 700);
				
				// unload selected image to let the user re-select the same image
				$('.pm-profile-cover-preview input.cropit-image-input')[0].value = null;
			}
			cropit_cover_notify = $.notify({message: data.msg}, {type: data.alert_type});
		});

		return false;
	});
});
</script>
{/literal}
{/if}
{if $tpl_name == 'channel' && $smarty.get.view == 'playlists'}
{literal}
<script type="text/javascript">
$(document).ready(function(){
	$('.pm-pro-playlists-btn').trigger('click');
});
</script>
{/literal}
{/if}

{if $tpl_name == 'video-watch-episode'}
{literal}
<script type="text/javascript">
var episode_media_sources = {/literal}{$player_html_json}{literal};

$(document).ready(function(){
   $('.episode-switch-player').on('click', function(){
        var ms_id = $(this).attr('data-ms-id');
        var ms_index = $(this).attr('data-ms-index');
        $('#episode-player-container').prop("innerHTML", episode_media_sources[ms_index]);
        
        return false;
   });
   
});
</script>
{/literal}
{/if}

</body>
</html>