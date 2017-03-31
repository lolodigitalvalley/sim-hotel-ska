<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
	echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
	exit('Direct access not permitted.');
} 

if(!isset($_SESSION)){
    session_start();
}

require_once  BASE_PATH.'/config/config.php';

if ( ! isset($_SESSION['ses_User']) && ! isset($_SESSION['ses_Level']))
{
	echo "<center><h2>Anda belum login</h2><br/>";
    echo "<h2>Silahkan <a href='".ADMIN_URL."/index.php'>Login</a></h2></center>";
	exit;
}


?>