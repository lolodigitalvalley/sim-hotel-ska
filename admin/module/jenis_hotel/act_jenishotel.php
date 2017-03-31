<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
include BASE_PATH.'/config/connection.php';
include BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='jenis_hotel' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $jenis_hotel     = val_gpc($_POST['jenis_hotel']) ? filter_str($_POST['jenis_hotel']) : '';
			$result            = mysql_query("INSERT INTO jenis_hotel VALUES('','".$jenis_hotel."','".$_POST['deskripsi']."','".$_POST['status']."')");
			$_SESSION['result']= $result ? 'input' : 'failed';
            header('location:'.ADMIN_URL.'/main.php?module=jenis_hotel');
		break;
		
		case "edit":
			if (val_number($_POST['id'])) 
            {
                $id=filter_int($_POST['id']);
                $jenis_hotel     = val_gpc($_POST['jenis_hotel']) ? filter_str($_POST['jenis_hotel']) : '';			
                $result            = mysql_query("UPDATE jenis_hotel SET jenis_hotel='".$jenis_hotel."', deskripsi ='".$_POST['deskripsi']."', status='".$_POST['status']."' WHERE id_jenis=".$id);
     			
                 $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=jenis_hotel');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=jenis_hotel";</script>');
                exit; 
            }
		break;
		
		case "del":
			if (val_number($_GET['id'])) 
            {
                $id     = filter_int($_GET['id']);
                $result = mysql_query("DELETE FROM jenis_hotel WHERE id_jenis=".$id);
     			$_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=jenis_hotel');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=jenis_hotel";</script>');
                exit; 
            }
		break;
	}
}

?>