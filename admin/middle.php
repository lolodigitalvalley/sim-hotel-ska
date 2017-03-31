<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
	echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
	exit('Direct access not permitted.');
} 
  
require_once BASE_PATH.'/config/connection.php';
require_once BASE_PATH.'/libraries/text_lib.php';
require_once BASE_PATH.'/libraries/security_lib.php';

if ( ! empty($_GET['module'])) 
{
    $module = str_replace('/','',str_replace('\\','',$_GET['module']));
    	
	switch ($module)
	{
		case 'dashboard':
			include 'module/home/dashboard.php';
		break;
        case 'user':
			include 'module/user/user.php';
		break;	
		case 'a_user':
			include 'module/user/a_user.php';
		break;	
		case 'e_user':
			include 'module/user/e_user.php';
		break; 
        
		case 'page':
			include 'module/page/page.php';
		break;
		case 'a_page':
			include 'module/page/a_page.php';
		break;	
		case 'e_page':
			include 'module/page/e_page.php';
		break;
		
		case 'hotel':
			include 'module/hotel/hotel.php';
		break;		
		case 'a_hotel':
			include 'module/hotel/a_hotel.php';
		break;	
		case 'e_hotel':
			include 'module/hotel/e_hotel.php';
		break; 
        
		case 'kategori_hotel':
			include 'module/kategori_hotel/kategori_hotel.php';
		break;		
		case 'a_kategorihotel':
			include 'module/kategori_hotel/a_kategorihotel.php';
		break;	
		case 'e_kategorihotel':
			include 'module/kategori_hotel/e_kategorihotel.php';
		break;
        
		case 'jenis_hotel':
			include 'module/jenis_hotel/jenis_hotel.php';
		break;		
		case 'a_jenishotel':
			include 'module/jenis_hotel/a_jenishotel.php';
		break;	
		case 'e_jenishotel':
			include 'module/jenis_hotel/e_jenishotel.php';
		break;
        
		case 'jaringan_hotel':
			include 'module/jaringan_hotel/jaringan_hotel.php';
		break;		
		case 'a_jaringanhotel':
			include 'module/jaringan_hotel/a_jaringanhotel.php';
		break;	
		case 'e_jaringanhotel':
			include 'module/jaringan_hotel/e_jaringanhotel.php';
		break;
        
		case 'hubungi_kami':
			include 'module/hubungi_kami/hubungi_kami.php';
		break;	
		case 'e_hubungikami':
			include 'module/hubungi_kami/e_hubungikami.php';
		break;
        
		case 'kecamatan':
			include 'module/kecamatan/kecamatan.php';
		break;	
		case 'a_kecamatan':
			include 'module/kecamatan/a_kecamatan.php';
		break;	
		case 'e_kecamatan':
			include 'module/kecamatan/e_kecamatan.php';
		break;

		case 'kelurahan':
			include 'module/kelurahan/kelurahan.php';
		break;
		case 'a_kelurahan':
			include 'module/kelurahan/a_kelurahan.php';
		break;	
		case 'e_kelurahan':
			include 'module/kelurahan/e_kelurahan.php';
		break;
	}
}
else
{
	//include 'module/home/dashboard.php';
}

?>