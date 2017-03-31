<?php
if( ! defined('BASE_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}

/** Site Url */
// Is the user using HTTPS?
define ('SITE_URL',(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST']);

define('FKR_SITE_URL', SITE_URL.'/simska');

/** Admin Folder */
define('FKR_ADMIN', '/admin');

/** Media Folder  */
define( 'FKR_MEDIA', '/media');

define( 'FKR_IMG_POST', '/media/img_post');

/** JQuery Url  */
define( 'FKR_JQUERY', '/js');

/** CSS Url  */
define( 'FKR_CSS', '/CSS');

/** Don't Change */
define( 'BASE_URL', FKR_SITE_URL);

define( 'ADMIN_URL', FKR_SITE_URL . FKR_ADMIN);

define( 'MEDIA_URL', FKR_SITE_URL . FKR_MEDIA);

define( 'IMG_POST_URL', FKR_SITE_URL. FKR_IMG_POST);

define( 'CSS_URL', FKR_SITE_URL. FKR_CSS);

define( 'JQUERY_URL', FKR_SITE_URL. FKR_JQUERY);

?>