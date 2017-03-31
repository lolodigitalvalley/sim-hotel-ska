<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
require_once BASE_PATH.'/config/connection.php';
require_once BASE_PATH.'/config/config.php';
include BASE_PATH.'/libraries/security_lib.php';
include BASE_PATH.'/libraries/text_lib.php';
include BASE_PATH.'/libraries/upload_lib.php';

define( 'IMG_POST_PATH', BASE_PATH. FKR_IMG_POST );

if ($_GET['module']=='hotel' && ! empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $_SESSION['hotel']=$_POST;                        
            $error = array();
            
            (val_gpc($_POST['telphon']) ? (val_telepon($_POST['telphon']) ? $telphon = $_POST['telphon'] : $error[]='Format telphon salah(ex: 0271-777888).') : '');
            (val_gpc($_POST['email']) ? (val_email($_POST['email']) ? $email = $_POST['email'] : $error[]='Format email salah (ex: admin@elresidence.com).') : '');
            (val_gpc($_POST['website']) ? (val_url($_POST['website']) ? $website = $_POST['website'] : $error[]='Format website salah (ex: http://elresidence.com).')  : '');
            (val_gpc($_POST['min_harga']) ? (val_number($_POST['min_harga']) ? $min_harga = $_POST['min_harga'] : $error[]='Harga Terendah Harus Dalam Angka (ex: 98000).') : '');
            (val_gpc($_POST['max_harga']) ? (val_number($_POST['max_harga']) ? $max_harga = $_POST['max_harga'] : $error[]='Harga Tertinggi Harus Dalam Angka (ex:12800000).') : '');
            
            if( ! count($error))
            {
                $nama_hotel = val_gpc($_POST['nama_hotel']) ? filter_str($_POST['nama_hotel']) : '';
                $alamat = val_gpc($_POST['alamat']) ? filter_str($_POST['alamat']) : '';  
                $latitude = val_gpc($_POST['latitude']) ? filter_str($_POST['latitude']) : '';
                $longitude = val_gpc($_POST['longitude']) ? filter_str($_POST['longitude']) : '';
                
                if(empty($_FILES['xfile']['tmp_name'])){                
                    $result = mysql_query("INSERT INTO hotel VALUES ('','".$_SESSION['ses_User']."','".$_POST['id_kategori']."','".$_POST['id_jenis']."','".$_POST['id_jaringan']."',
                                          '".$nama_hotel."','".seo_title($nama_hotel)."','".$alamat."','".$_POST['id_kelurahan']."','','".$latitude."',
                                          '".$longitude."','".$telphon."','".$website."','".$email."','".$min_harga."','".$max_harga."','".$_POST['deskripsi']."','".$_POST['status']."')")or die (mysql_error());
                    
    			
                }
                else{
                    if(val_image($_FILES['xfile']['tmp_name'],$_FILES['xfile']['name'])){                  
                        $file_name=preg_replace("/[^A-Z0-9._-]/i", "_", $_FILES['xfile']['name']);
                        $unique=rand(0000,9999);
                        $img_name=$unique.$file_name;
                        
                        upload_post_img(IMG_POST_PATH.'/',$img_name,400);
                        $result = mysql_query("INSERT INTO hotel VALUES ('','".$_SESSION['ses_User']."','".$_POST['id_kategori']."','".$_POST['id_jenis']."','".$_POST['id_jaringan']."',
                                          '".$nama_hotel."',,'".seo_title($nama_hotel)."','".$alamat."','".$_POST['id_kelurahan']."','".$img_name."','".$longitude."',
                                          '".$longitude."','".$telphon."','".$website."','".$email."','".$min_harga."','".$max_harga."','".$_POST['deskripsi']."','".$_POST['status']."')")or die (mysql_error());
                    }
                    
                    else{
                        echo '<script>window.alert("Hanya Boleh Mengupload File Gambar");
                        window.location="'.ADMIN_URL.'/main.php?module=post";</script>';
                        exit; 
                    } 
                }
                $_SESSION['hotel']['result']= $result ? 'input' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=hotel');
                exit;
            }
                
            $_SESSION['hotel']['error'] = $error;
            header('location:'.ADMIN_URL.'/main.php?module=a_hotel');

		break;
		
		case "edit":
            $_SESSION['hotel']=$_POST;                        
            $error = array();
            
            (val_gpc($_POST['telphon']) ? (val_telepon($_POST['telphon']) ? $telphon = $_POST['telphon'] : $error[]='Format telphon salah(ex: 0271-777888).') : '');
            (val_gpc($_POST['email']) ? (val_email($_POST['email']) ? $email = $_POST['email'] : $error[]='Format email salah (ex: admin@elresidence.com).') : '');
            (val_gpc($_POST['website']) ? (val_url($_POST['website']) ? $website = $_POST['website'] : $error[]='Format website salah (ex: http://elresidence.com).')  : '');
            (val_gpc($_POST['min_harga']) ? (val_number($_POST['min_harga']) ? $min_harga = $_POST['min_harga'] : $error[]='Harga Terendah Harus Dalam Angka (ex: 98000).') : '');
            (val_gpc($_POST['max_harga']) ? (val_number($_POST['max_harga']) ? $max_harga = $_POST['max_harga'] : $error[]='Harga Tertinggi Harus Dalam Angka (ex:12800000).') : '');
            $id =  filter_int($_POST['id']);
            
            if( ! count($error))
            {                
                $nama_hotel = val_gpc($_POST['nama_hotel']) ? filter_str($_POST['nama_hotel']) : '';
                $alamat = val_gpc($_POST['alamat']) ? filter_str($_POST['alamat']) : '';  
                $latitude = val_gpc($_POST['latitude']) ? filter_str($_POST['latitude']) : '';
                $longitude = val_gpc($_POST['longitude']) ? filter_str($_POST['longitude']) : '';
                                
                if(empty($_FILES['xfile']['tmp_name']))
    			{
                    $result =mysql_query("UPDATE hotel SET nama_hotel ='".$nama_hotel."',
                                                    nama_seo     ='".seo_title($nama_hotel)."', 
                                                    id_kategori	 ='".$_POST['id_kategori']."',
                                                    id_jenis	 ='".$_POST['id_jenis']."',
                                                    id_jaringan  ='".$_POST['id_jaringan']."',                                                   
                                                    id_kelurahan ='".$_POST['id_kelurahan']."',
                                                    alamat	     ='".$alamat."',
                                                    latitude	 ='".$latitude ."',
                                                    longitude	 ='".$longitude."',
                                                    telphon      ='".$telphon."',
                                                    website      ='".$website."',
                                                    email        ='".$email."',
                                                    min_harga    ='".$min_harga."',
                                                    max_harga    ='".$max_harga."',
                                                    deskripsi	 ='".$_POST['deskripsi']."',
                                                    status       ='".$_POST['status']."'
                                                    WHERE id_hotel=".$id) or die (mysql_error());			
    			}
                else{
                    if(val_image($_FILES['xfile']['tmp_name'],$_FILES['xfile']['name'])){ 
                        if (val_gpc($_POST['foto'])) del_image(IMG_POST_PATH.'/',$_POST['foto']);                                               
                                           
                        $file_name=preg_replace("/[^A-Z0-9._-]/i", "_", $_FILES['xfile']['name']);
                        $unique=rand(0000,9999);
                        $img_name=$unique.$file_name;
                        
                        upload_post_img(IMG_POST_PATH.'/',$img_name,400);
                        $result =mysql_query("UPDATE hotel SET nama_hotel ='".$nama_hotel."',
                                                    nama_seo    ='".seo_title($nama_hotel)."',  
                                                    id_kategori	='".$_POST['id_kategori']."',
                                                    id_jenis	='".$_POST['id_jenis']."',
                                                    id_jaringan ='".$_POST['id_jaringan']."',                                                   
                                                    id_kelurahan ='".$_POST['id_kelurahan']."',
                                                    alamat	     ='".$alamat."',
                                                    telphon      ='".$telphon."',
                                                    website      ='".$website."',
                                                    email        ='".$email."',
                                                    min_harga    ='".$min_harga."',
                                                    max_harga    ='".$max_harga."',
                                                    latitude	 ='".$latitude ."',
                                                    longitude	 ='".$longitude."',
                                                    deskripsi	 ='".$_POST['deskripsi']."',
                                                    foto         ='".$img_name."',
                                                    status       ='".$_POST['status']."'
                                                    WHERE id_hotel=".$id);	
                    }
                    else{
                        echo '<script>window.alert("Hanya Boleh Mengupload File Gambar");
                        window.location="'.ADMIN_URL.'/main.php?module=hotel";</script>';
                        exit; 
                    } 				
    			}
                $_SESSION['hotel']['result']= $result ? 'update' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=hotel'); 
                exit;    		
            }
            $_SESSION['hotel']['error'] = $error;
            header('location:'.ADMIN_URL.'/main.php?module=e_hotel&id='.$id);

		break;
		
		case "del":
			if (val_number($_GET['id'])) {
                $id     = filter_int($_GET['id']);
                $result = mysql_query("DELETE FROM hotel WHERE id_hotel=".$id);
     			$_SESSION['result']= $result ? 'del' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=hotel');
            }
            else{
                die('<script>window.alert("Id Tidak Boleh Kosong dan Harus Angka");
                window.location="'.ADMIN_URL.'/main.php?module=hotel";</script>');
                exit; 
            }
		break;
	}
}

?>