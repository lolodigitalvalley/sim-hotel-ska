<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
require_once BASE_PATH.'/config/connection.php';
$kecamatan = (isset($_GET['kecamatan'])) ? $_GET['kecamatan'] : '';
$kelurahan = mysql_query('SELECT * FROM kelurahan WHERE id_kecamatan ='.$kecamatan.' ORDER BY id_kelurahan ASC');
while($row=mysql_fetch_array($kelurahan))
{
   echo '<option value="'.$row['id_kelurahan'].'">'.$row['nama_kelurahan'].'</option>';
}                        
?>