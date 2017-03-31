<?php
if( ! defined('BASE_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}

/** The name of the database */
define( 'DB_NAME', 'sim' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$connect)
	{
		die('Terjadi Kesalahan Saat Koneksi Ke Server');
	}
else
	{
        $result	=mysql_select_db(DB_NAME, $connect);
	    if(!$result) die ('Database Tidak Ditemukan');
	}

?>