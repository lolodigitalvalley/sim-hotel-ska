<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
include BASE_PATH.'/config/connection.php';
include BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='kecamatan' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $nama_kecamatan     = val_gpc($_POST['nama_kecamatan']) ? filter_str($_POST['nama_kecamatan']) : '';
			$result            = mysql_query("INSERT INTO kecamatan VALUES('','".$nama_kecamatan."','".$_POST['status']."')");
			$_SESSION['result']= $result ? 'input' : 'failed';
            header('location:'.ADMIN_URL.'/main.php?module=kecamatan');
		break;
		
		case "edit":
			if (val_number($_POST['id'])) 
            {
                $id=filter_int($_POST['id']);
                $nama_kecamatan     = val_gpc($_POST['nama_kecamatan']) ? filter_str($_POST['nama_kecamatan']) : '';			
                $result            = mysql_query("UPDATE kecamatan SET nama_kecamatan='".$nama_kecamatan."', status='".$_POST['status']."' WHERE id_kecamatan=".$id);
     			
                 $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=kecamatan');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=kecamatan";</script>');
                exit; 
            }
		break;
		
		case "del":
			if (val_number($_GET['id'])) 
            {
                $id     = filter_int($_GET['id']);
                $result = mysql_query("DELETE FROM kecamatan WHERE id_kecamatan=".$id);
     			$_SESSION['result']= $result ? 'del' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=kecamatan');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=kecamatan";</script>');
                exit; 
            }
		break;
	}
}

?>