<?php
function anti_injection($str)
{
    $filter = mysql_real_escape_string(
    stripslashes(strip_tags(htmlspecialchars($str,ENT_QUOTES))));
    return $filter;
}

function val_gpc($data)
{
    if(isset($data) && ! empty($data))
        return TRUE;
    else
        return FALSE;
}

function val_number($int)
{
    return val_gpc($int) ? (is_numeric($int) ? TRUE : FALSE) : FALSE;    
}


function filter_num($int)
{
    if (preg_match('/[^0-9.]/',$int)){
        return abs((int)preg_replace('/[^0-9.]/',' ',$int));
    }
    else{
        return abs((int)$int);
    }        
}
    
function filter_int($int){
    return abs((int)$int);        
}
    
function filter_str($str)
{
    $filter = mysql_real_escape_string(stripslashes(strip_tags($str)));
    return $filter;
}

function filter_text($str)
{
    $filter = mysql_real_escape_string(stripslashes($str));
    return $filter;
}

function val_url($url) 
{
    $regex = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
    return (preg_match($regex, $url)) ? TRUE : FALSE;
}

function val_email($email)
{
	$regex = "/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/";
    return (preg_match($regex, $email)) ? TRUE : FALSE;
}

function val_telepon($telepon)
{
    $regex = "^0[1-9]{2,3}\-[1-9][0-9]{5,7}";
    return (ereg($regex, $telepon)) ? TRUE : FALSE;
}

?>