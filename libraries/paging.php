<?php

// class paging untuk halaman administrator
class Paging{
    // Fungsi untuk mencek halaman dan posisi data
    function cariPosisi($batas){
        if(empty($_GET['halkategori'])){
        	$posisi=0;
        	$_GET['halkategori']=1;
        }
        else{
        	$posisi = ($_GET['halkategori']-1) * $batas;
        }
        return $posisi;
    }
    
    // Fungsi untuk menghitung total halaman
    function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
    }
    
    // Fungsi untuk link halaman 1,2,3 (untuk admin)
    function navHalaman($halaman_aktif, $jmlhalaman){
            $link_halaman = '';
            $angka = '';
            $link_halaman .= '<div class="pagination"><ul>';
            // Link ke halaman pertama (first) dan sebelumnya (prev)
            if($halaman_aktif > 1){
            	$prev = $halaman_aktif-1;
            	$link_halaman .= '<li><a href="halkategori-'.$_GET['id'].'-1.html">&#171; First</a></li>
                                  <li><a href="halkategori-'.$_GET['id'].'-'.$prev.'.html">&#171;</a></li>';
            }
            else{ 
            	$link_halaman .= '<li class="disabled"><span>&#171; First</span></li><li class="disabled"><span>&#171; </span></li>';
            }
            
            $limit = ($jmlhalaman > 5) ? 5 : $jmlhalaman; 
            
            if  (($halaman_aktif+4) <= $jmlhalaman ) {
                if ($halaman_aktif < $limit){                    
                    for($i=1; $i<=$limit; $i++){
                        if ($i == $halaman_aktif) $angka .= '<li class="active" ><span>'.$halaman_aktif.'</span></li>';
                        else $angka .= '<li><a href="halkategori-'.$_GET['id'].'-'.$i.'.html">'.$i.'</a></li>';                
                    }
                }
                else{
                    for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){                      
                        $angka .= '<li><a href="halkategori-'.$_GET['id'].'-'.$i.'.html">'.$i.'</a></li>';
                    }
                    $angka .= '<li class="active" ><span>'.$halaman_aktif.'</span></li>';
                    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
         	          $angka .= '<li><a href="halkategori-'.$_GET['id'].'-'.$i.'.html">'.$i.'</a></li>';                
                    }
                } 
            }
            else{
                for ($i=$jmlhalaman-($limit-1); $i<=$jmlhalaman; $i++){            
                    if ($i == $halaman_aktif)  $angka .= '<li class="active" ><span>'.$halaman_aktif.'</span></li>'; 
                    else $angka .= '<li><a href="halkategori-'.$_GET['id'].'-'.$i.'.html">'.$i.'</a></li>';
                }
            }  
            $link_halaman .= $angka;
            
            // Link ke halaman berikutnya (Next) dan terakhir (Last) 
            if($halaman_aktif < $jmlhalaman){
            	$next = $halaman_aktif+1;
            	$link_halaman .= '<li><a href="halkategori-'.$_GET['id'].'-'.$next.'.html">&#187; </a></li>
                                  <li><a href="halkategori-'.$_GET['id'].'-'.$jmlhalaman.'.html">Last &#187; </a></li>';
            }
            else{
            	$link_halaman .= '<li class="disabled"><span>&#187; </span></li><li class="disabled"><span>Last &#187; </span></li>';
            }
            $link_halaman .= "</ul></div>";
            return $link_halaman;   
    }
}

// class paging untuk halaman administrator
class Paging2{
    // Fungsi untuk mencek halaman dan posisi data
    function cariPosisi($batas){
        if(empty($_GET['halaman'])){
        	$posisi=0;
        	$_GET['halaman']=1;
        }
        else{
        	$posisi = ($_GET['halaman']-1) * $batas;
        }
        return $posisi;
    }
    
    // Fungsi untuk menghitung total halaman
    function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
    }
    
    // Fungsi untuk link halaman 1,2,3 (untuk admin)
    function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman = '';
        $link_halaman .= '<div class=paging>';
        // Link ke halaman pertama (first) dan sebelumnya (prev)
        if($halaman_aktif > 1){
        	$prev = $halaman_aktif-1;
        	$link_halaman .= '<span class="firstlast" ><a href="'.$_SERVER[PHP_SELF].'"?module='.$_GET['module'].'&halaman=1">&#171; First</a></span>
                              <span class="prevnext" ><a href="'.$_SERVER[PHP_SELF].'"?module="'.$_GET['module'].'&halaman='.$prev.'">&#171;</a></span>';
        }
        else{ 
        	$link_halaman .= '<span class="disabled" >&#171; First</span><span class="disabled" >&#171;</span>';
        }
        
        // Link halaman 1,2,3, ...
        $angka = ($halaman_aktif > 3 ? " ... " : " "); 
        for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
          if ($i < 1)
            continue;
       	    $angka .= '<a href="'.$_SERVER[PHP_SELF].'?module='.$_GET['module'].'&halaman='.$i.'">'.$i.'</a>';
          }
       	    $angka .= '<span class="current" >'.$halaman_aktif.'</span>';
        	  
            for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
            if($i > $jmlhalaman)
              break;
        	  $angka .= '<a href="'.$_SERVER[PHP_SELF].'?module='.$_GET['module'].'&halaman='.$i.'">'.$i.'</a>';
            }
        	  $angka .= ($halaman_aktif+2<$jmlhalaman ? ' ... <a href="'.$_SERVER[PHP_SELF].'?module='.$_GET['module'].'&halaman='.$jmlhalaman.'">'.$jmlhalaman.'</a>' : " ");
        
        $link_halaman .= $angka;
        
        // Link ke halaman berikutnya (Next) dan terakhir (Last) 
        if($halaman_aktif < $jmlhalaman){
        	$next = $halaman_aktif+1;
        	$link_halaman .= '<span class="prevnext" ><a href="'.$_SERVER[PHP_SELF].'?module='.$_GET['module'].'&halaman='.$next.'">&#187;</a></span>
                              <span class="firstlast" ><a href="'.$_SERVER[PHP_SELF].'?module='.$_GET['module'].'&halaman='.$jmlhalaman.'">Last &#187; </a></span>';
        }
        else{
        	$link_halaman .= '<span class="disabled"" >&#187;</span><span class=disabled >Last &#187; </span>';
        }
        $link_halaman .= "</div>";
        return $link_halaman;
    }
}
?>
