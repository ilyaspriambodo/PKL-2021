<?php
error_reporting(0);

$uniq_id = trim($_GET['vid']);
$location = '';

if (preg_match('/(^[a-zA-Z0-9]{4,16}$)/', $_GET['vid']) != 0)
{
	define('IGNORE_MOBILE', true);
	define('IGNORE_MAINTENANCE_MODE', true);
	include('config.php');

	if ($fp = @fopen('./'. _ADMIN_FOLDER .'/temp/embedparams.xml', 'r'))
	{
		$location = '';
		while( ! feof($fp))
		{
			$location .= fread($fp, 512);
		}
		fclose($fp);
		
		$location = str_replace('___UNIQ___', $uniq_id, $location);
	}
	
	if (strlen($location) == 0)
	{	
		$player_config = "{embedded: true,
						showOnLoadBegin: true, 
						useHwScaling: false, 
						menuItems: [false, false, true, true, true, false, false], 
						progressBarColor2: '0x000000', 
						progressBarColor1: '0xFFFFFF', 
						controlsOverVideo: 'locked', 
						controlBarGloss: 'high', 
						initialScale: 'fit', 
						hideControls: false, 
						autoPlay: false,
						autoBuffering: true,
						playList: [ { overlayId: 'play', 
								  name: 'ClickToPlay'
								 }, 
								 {  linkWindow: '_blank', 
									linkUrl: 'watch.php?vid=". $uniq_id ."', 
									url: 'videos.php?vid=". $uniq_id ."', 
									name: ''
								 }]}";
	
		$location = 'players/flowplayer2/flowplayer.swf?config=' . rawurlencode($player_config);
	}

	header('Location: '. $location);
}	//	endif preg_match uniq_id

exit();
