<?php
/** MySQL database name */
$db_name = 'ktube';

/** MySQL database username */
$db_user = 'ktube';

/** MySQL database password */
$db_pass = '1';

/** MySQL hostname */
$db_host = 'localhost';

// Full URL without any trailing slash (e.g http://www.example.com)
define('_URL', 'http://10.55.1.250');	

//-- Customer ID --//
// Replace "YOUR_CUSTOMER_ID" below with the assigned "Customer ID".
// The "Customer ID" is found in the order confirmation emails or in your Customer Account
// If you don't know your "Customer ID" email support at support@phpsugar.com
//define('_CUSTOMER_ID', 'your_customer_id_here');	

define('_ADMIN_FOLDER', 'admin');

error_reporting(E_ALL & ~E_NOTICE &  ~E_STRICT  & ~E_DEPRECATED); // Production
//error_reporting(E_ALL & ~E_NOTICE); // Development

// ========================================================= //
//-- MySQL Backup Directory --//
define('BKUP_DIR', 'temp');	//	WITHOUT any trailing slash
//define('_POWEREDBY', 1);

@header('CONTENT-TYPE: text/html; charset=utf-8');
define('ABSPATH', dirname(__FILE__).'/'); 
if ( ! file_exists('install.php') ) 
{
	require_once( ABSPATH.'include/settings.php');
}
else
{
	if ( ! defined('PM_DOING_INSTALL'))
	{
		die('<div align="center" style="font-family: Arial, sans-serif; color: #555; margin: 60px 0; line-height: 1.6em;"><img src="'. _ADMIN_FOLDER .'/img/login-logo.png"> <br /> <br /> <br />If you haven\'t installed PHP Melody yet, <a href="install.php">start the installation process</a> now. <br> Otherwise, remove <strong>install.php</strong> from your server.');
	}
}
