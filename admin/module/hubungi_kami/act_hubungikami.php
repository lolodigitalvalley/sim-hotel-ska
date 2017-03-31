<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
include BASE_PATH.'/config/connection.php';
include BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='hubungi_kami' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		
		case "edit":
			if (val_number($_POST['id'])) 
            {
                $id=filter_int($_POST['id']);		
                $result            = mysql_query("UPDATE hubungi SET pesan='".$_POST['pesan']."' WHERE id_hubungi=".$id);
     			mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],"From: redaksi@kami.com");
                 $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=hubungi_kami');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=hubungi_kami";</script>');
                exit; 
            }
		break;
		
		case "del":
			if (val_number($_GET['id'])) 
            {
                $id     = filter_int($_GET['id']);
                $result = mysql_query("DELETE FROM hubungi WHERE id_hubungi=".$id);
     			$_SESSION['result']= $result ? 'del' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=hubungi_kami');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=hubungi_kami";</script>');
                exit; 
            }
		break;
	}
}

?>