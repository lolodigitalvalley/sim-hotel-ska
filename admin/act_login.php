<?php
define ('BASE_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(__FILE__))) : str_replace('\\', '/', realpath(dirname(dirname(__FILE__)))));

require_once BASE_PATH."/config/connection.php";
require BASE_PATH."/libraries/security_lib.php";

session_start();
$error = array();
if (val_gpc($_POST['username']) && val_gpc($_POST['password'])){
    $username=anti_injection($_POST['username']);
    $password=anti_injection($_POST['password']);                
    if (ctype_alnum($username) && ctype_alnum($password)) 
    {
        $pengacak = "XFBTHASL192837465FIKRIYAH";
        $passEnkrip = md5($pengacak . md5($password) . $pengacak); 
        $query="SELECT username,name,level FROM user where username='".$username."' AND password='".$passEnkrip."'";
        $result=mysql_query($query);
        $jum=mysql_num_rows($result);
        if ($jum >0)
        {                	
            $row=mysql_fetch_array($result);
        	$_SESSION['ses_User']=$row['username'];
        	$_SESSION['ses_Level']=$row['level'];
            $_SESSION['ses_Name']=$row['name'];
            //Declare session for CKEDITOR and KCFINDER
            $_SESSION['ses_KCFINDER']=array();
            $_SESSION['ses_KCFINDER']['disabled'] = false;
            $_SESSION['ses_KCFINDER']['uploadURL'] = "../media";
            $_SESSION['ses_KCFINDER']['uploadDir'] = "";
            header('location:main.php?module=dashboard');
            exit;                    
         }
         else{
    	    $error[]='Wrong username and/or password!';
         }    
    }
    else{
        $error[]='Use alphabet and/or numeric character!';  
    }
}
else{
    $error[] = "All the fields must be filled in sasasa!";        
}                       
if($error) $_SESSION['error'] = implode('<br />',$error);            
header('location: index.php');
exit;               
?>
