<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
include BASE_PATH.'/config/connection.php';
include BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='page' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $judul  = val_gpc($_POST['judul']) ? filter_str($_POST['judul']) : '';
			$result = mysql_query("INSERT INTO page VALUES('','".$judul."','".$_POST['isi']."','".$_POST['status']."')");
			$_SESSION['result']= $result ? 'input' : 'failed';
            header('location:'.ADMIN_URL.'/main.php?module=page');
		break;
		
		case "edit":
			if (val_number($_POST['id'])) 
            {
                $id=filter_int($_POST['id']);
                $judul  = val_gpc($_POST['judul']) ? filter_str($_POST['judul']) : '';			
                $result = mysql_query("UPDATE page SET judul='".$judul."', isi ='".$_POST['isi']."', status='".$_POST['status']."' WHERE id_page=".$id);
     			
                 $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=page');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=page";</script>');
                exit; 
            }
		break;
	}
}

?>