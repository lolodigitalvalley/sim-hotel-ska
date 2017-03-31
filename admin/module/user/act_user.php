<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(dirname(__FILE__)))) : str_replace('\\', '/', realpath(dirname(dirname(dirname(__FILE__))))));    
define ('BASE_PATH',dirname(ADMIN_PATH));
    
include ADMIN_PATH.'/val_session.php';
require_once BASE_PATH.'/config/connection.php';
require_once BASE_PATH.'/config/config.php';
require_once BASE_PATH.'/libraries/security_lib.php';

if ($_GET['module']=='user' && !empty($_GET['act'])) 
{
	$act=$_GET['act'];			
	switch ($act)
	{		
		case "add":
            $_SESSION['user']=$_POST;                        
            $error = array();
            
            if (val_gpc($_POST['username']))
            {
                $username=filter_str($_POST['username']);
                $_SESSION['user']['username']=$username;     
            }
            else $error[]='Username masih kosong.';
                            
			if (val_gpc($_POST['email']))
            {
			     if (val_email($_POST['email']))
                 {
			         $email=$_POST['email'];
                     $_SESSION['user']['email']=$email;   
			     }
                 else $error[]='Format email salah.';
			}
            else $error[]='Email masih kosong.';
			         
            (val_gpc($_POST['pass'])) ? $pass=$_POST['pass'] : $error[]='Password masih kosong.';
			(val_gpc($_POST['repass'])) ? $repass=$_POST['repass'] : $error[]='Password belum diulang.';							
			
            if($username==$pass)  $error[]='Username dan Password tidak boleh sama.';
            if($pass!=$repass) $error[]='Password tidak sama.';            
			if (val_gpc($_POST['name']))
            {
			     $name= filter_str($_POST['name']);
                 $_SESSION['user']['name']=$name;
			}                 
            if (val_gpc($_POST['level'])) $level=$_POST['level'];
            if (val_gpc($_POST['status'])) $status=$_POST['status'];
            if( ! count($error))
            {
                $pengacak = "XFBTHASL192837465FIKRIYAH";
                $passEnkrip = md5($pengacak . md5($pass) . $pengacak);                
                $result =mysql_query("INSERT INTO user (username,password,name,email,level,status) VALUES('".$username."','".$passEnkrip."','".$name."','".$email."','".$level."','".$status."')") or die(mysql_error());
                $_SESSION['result']= $result ? 'input' : 'failed';
                unset($_SESSION['user']); 
                header('location:'.ADMIN_URL.'/main.php?module=user');
                exit; 
            }           
            if($error) $_SESSION['user']['error'] = $error;
            header('location:'.ADMIN_URL.'/main.php?module=a_user');
		break;
		
		case "edit":
            (val_gpc($_POST['username'])) ? $username=filter_str($_POST['username']) : $error[]='Username masih kosong.';                
			(val_gpc($_POST['email'])) ? ((val_email($_POST['email'])) ? $email=$_POST['email'] : $error[]='Format email salah.') : $error[]='Email masih kosong.';
            $name  =(val_gpc($_POST['name'])) ? filter_str($_POST['name']) : '';                
            $level =(val_gpc($_POST['level'])) ? $_POST['level'] : '0';
            $status=(val_gpc($_POST['status'])) ? $_POST['status'] : '0';
            
            $pass  =(val_gpc($_POST['pass'])) ? $_POST['pass'] : '';
            $repass  =(val_gpc($_POST['repass'])) ? $_POST['repass'] : '';
            
            if($username==$pass)  $error[]='Username dan Password tidak boleh sama.';
            if($pass!=$repass) $error[]='Password tidak sama.'; 
                       
            if( ! count($error))
            {
                if (empty($pass)) 
                {	
                    $result =mysql_query("UPDATE user SET name='".$name."',email='".$email."',level ='".$level."',status='".$status."' WHERE username='".$username."'") or die(mysql_error());                    
                }
                else{
                    $pengacak = "XFBTHASL192837465FIKRIYAH";
                    $passEnkrip = md5($pengacak . md5($pass) . $pengacak); 
                    $result =mysql_query("UPDATE user SET password='".$passEnkrip."', name='".$name."',email='".$email."',level ='".$level."',status='".$status."' WHERE username='".$username."'") or die(mysql_error());                    
    
                }
                $_SESSION['result']= $result ? 'edit' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=user');
                exit; 
            }	
            if($error) $_SESSION['user']['error'] = $error;
            header('location:'.ADMIN_URL.'/main.php?module=e_user&id='.$username);
		break;
		
		case "del":
			if (val_gpc($_GET['id']))
            {
                $id=filter_str($_GET['id']);
                $result=mysql_query("DELETE FROM user where username='".$id."'");
                $_SESSION['result']= $result ? 'del' : 'failed';
                header('location:'.ADMIN_URL.'/main.php?module=user');  
            }
		break;
	}
}

?>