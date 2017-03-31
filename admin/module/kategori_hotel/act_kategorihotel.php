<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
include BASE_PATH.'/config/connection.php';
include BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='kategori_hotel' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $nama_kategori     = val_gpc($_POST['nama_kategori']) ? filter_str($_POST['nama_kategori']) : '';
			$result            = mysql_query("INSERT INTO kategori_hotel VALUES('','".$nama_kategori."','".$_POST['deskripsi']."','".$_POST['status']."')");
			$_SESSION['result']= $result ? 'input' : 'failed';
            header('location:'.ADMIN_URL.'/main.php?module=kategori_hotel');
		break;
		
		case "edit":
			if (val_number($_POST['id'])) 
            {
                $id=filter_int($_POST['id']);
                $nama_kategori     = val_gpc($_POST['nama_kategori']) ? filter_str($_POST['nama_kategori']) : '';			
                $result            = mysql_query("UPDATE kategori_hotel SET nama_kategori='".$nama_kategori."', deskripsi ='".$_POST['deskripsi']."', status='".$_POST['status']."' WHERE id_kategori=".$id);
     			
                 $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=kategori_hotel');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=kategori_hotel";</script>');
                exit; 
            }
		break;
		
		case "del":
			if (val_number($_GET['id'])) 
            {
                $id     = filter_int($_GET['id']);
                $result = mysql_query("DELETE FROM kategori_hotel WHERE id_kategori=".$id);
     			$_SESSION['result']= $result ? 'del' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=kategori_hotel');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=kategori_hotel";</script>');
                exit; 
            }
		break;
	}
}

?>