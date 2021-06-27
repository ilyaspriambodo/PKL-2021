<?php
function output_image($file)
{
	global $conn_id;

	if ($conn_id)
	{
		mysql_close($conn_id);
	}

	$fp = fopen($file, 'rb');
	$filesize = filesize($file);
	
	header('Content-Type: image/jpeg');
	header('Content-length: '. $filesize);
	
	if (function_exists('fpassthru'))
	{
		fpassthru($fp);
	}
	else // some hosts disable this function; high chances similar functions are disabled too in this scenario
	{
		flock($fp, LOCK_SH);
		
		$buffer = fread($fp, $filesize);
	    echo $buffer;
		
	    flock($fp, LOCK_UN);
	    fclose($fp);		
	}
	
	
	exit();
}

$uniq_id = $_GET['vid'];

if ( ! empty($uniq_id) && strlen($uniq_id) < 10 && ctype_alnum($uniq_id))
{
	define('IGNORE_MOBILE', true);
	define('IGNORE_MAINTENANCE_MODE', true);

	require('config.php');
	require_once('include/functions.php');
	require_once('include/user_functions.php');

	$file = _THUMBS_DIR_PATH . $uniq_id .'-social.jpg';
	$source_file = _THUMBS_DIR_PATH . $uniq_id .'-1.jpg';

	//$video = request_video($uniq_id);
	if (file_exists($file))
	{
		//Source image was modified after the social thumb? Regenerate the social thumbnail!
		if (file_exists($source_file) && filemtime($file) < filemtime($source_file))
		{
			unlink($file);
			
			if (generate_social_thumb($source_file))
			{
				output_image($file);
			}
			else
			{
				output_image($source_file);
			}
		}
		else
		{
			output_image($file);
		}
		
	}

	// generate social sharing thumb
	if (file_exists($source_file))
	{
		if (generate_social_thumb($source_file))
		{
			output_image($file);
		}
		else
		{
			output_image($source_file);
		}
	}

	output_image(ABSPATH .'/templates/'. _TPLFOLDER .'/img/no-thumbnail.jpg');
}

// worst case scenario
header("HTTP/1.0 404 Not Found");
exit();