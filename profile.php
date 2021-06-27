<?php
require('config.php');
require_once('include/functions.php');
require_once('include/user_functions.php');

// @since v2.6
header($_SERVER['SERVER_PROTOCOL'] .' 301 Moved Permanently'); 
header('Location: '. get_profile_url(array('username' => $_GET['u'])));

exit();
