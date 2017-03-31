<?php
function val_image($source_path,$source_name){
    $val_image= FALSE;
    
    $ext_allowed = array("jpg", "jpeg", "gif", "png");

    $parts      =pathinfo($source_name);
    $extension  =$parts['extension'];
        
    $img_type = exif_imagetype($source_path);
    $file_allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);

    if ((in_array($extension, $ext_allowed)) &&
        (in_array($img_type,$file_allowed)) &&
        (getimagesize($source_path))){
            $val_image = TRUE;
    }
  
    return $val_image;  
}

function upload_post_img($dest_path, $dest_name, $small_size){    
    
    if (function_exists( 'finfo_open' )){
        $finfo     =finfo_open(FILEINFO_MIME_TYPE);
        $img_type  =finfo_file($finfo, $_FILES["xfile"]["tmp_name"]);
    }  
    else{
        $img_type = $_FILES['xfile']['type'];
    } 
         
    if (substr($dest_path,strlen($dest_path)-1,1) != '/' ) $dest_path .= '/';
    $upload_path = $dest_path.$dest_name;
    $small_upload_path = $dest_path.'small_'.$dest_name;
    
    //Simpan gambar dalam ukuran sebenarnya
    move_uploaded_file($_FILES["xfile"]["tmp_name"],$upload_path);
    
    //identitas file asli
    switch($img_type) {
		case "image/gif":            
			$im_src=imagecreatefromgif($upload_path); 
			break;
	    case "image/pjpeg":
		case "image/jpeg":
		case "image/jpg":
			$im_src=imagecreatefromjpeg($upload_path); 
			break;
	    case "image/png":
		case "image/x-png":
			$im_src=imagecreatefrompng($upload_path); 
			break;            
  }
  
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi besar ... pixel
  //Set ukuran gambar hasil perubahan
  if($src_width>=$small_size){
    $dst_width = $small_size;
  } 
  else {
    $dst_width = $src_width;
  }
  
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
   
  //Simpan gambar
  switch($img_type) {
		case "image/gif":
  			imagegif($im,$small_upload_path);
			break;
	    case "image/pjpeg":
		case "image/jpeg":
		case "image/jpg":
  			imagejpeg($im,$small_upload_path);
			break;
	    case "image/png":
		case "image/x-png":
  			imagepng($im,$small_upload_path);
			break;
  }
  
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

function del_image($source_path,$source_name){
    if (substr($source_path,strlen($source_path)-1,1) != '/' ) $source_path .= '/';
    if (file_exists($source_path.$source_name)) unlink($source_path.$source_name); 
    if (file_exists($source_path.'small_'.$source_name)) unlink($source_path.'small_'.$source_name);    
}


?>