<?php 
if (isset($_GET['module'])){
    
    $module = str_replace('/','',str_replace('\\','',$_GET['module']));
    
    switch ($module){
        case 'home' :
            $semuahotel = mysql_query("SELECT hotel.*, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                                       FROM hotel INNER JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                                       JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                                       JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                                       WHERE hotel.status = '1' ORDER BY hotel.id_hotel ASC") OR die(mysql_error());
            while($sh = mysql_fetch_array($semuahotel))
            {
?>
<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>"><?php echo $sh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
            <?php
            if ($sh['id_kategori'] == 6){
                for($i = 0; $i < 6; $i++) echo '<span class="rating-star"></span>';
            }
            else{
                $nobintang = 5 - $sh['id_kategori'];
                for($i = 0; $i < $sh['id_kategori'] ; $i++) echo '<span class="rating-star rating-star-hover"></span>';
                for($i = 0; $i < $nobintang; $i++) echo '<span class="rating-star"></span>';                  
            }      
            ?>            
        </div>        
      </div>
      <?php if (!empty( $sh['foto'])) { ?>                          
      <div class="thumb-news">
        <a href="<?php echo IMG_POST_URL.'/'.$sh['foto']; ?>">
            <img src="<?php echo IMG_POST_URL.'/small_'.$sh['foto']; ?>"/>
        </a>
      </div>
      <?php } ?>
	  <table class='table-info'>
	  <tr>
			<td>Rate Per Hari</td>
			<td width='7px'> : </td>
			<td><span class="rate"> <?php echo rupiah($sh['min_harga']).' / '. rupiah($sh['max_harga']); ?></span></td>
	  </tr>
	  <tr>
			<td>Jenis Hotel</td>
			<td width='7px'> : </td>
			<td><span class="place"><?php echo $sh['jenis_hotel']; ?></span></td>
	  </tr>
	  <tr>
			<td>Wilayah</td>
			<td width='7px'> : </td>
			<td><span class="place"> <a href="#" title='Lihat Lokasi' alt='Lihat Lokasi'><?php echo $sh['nama_kelurahan']; ?></a></span></td>
	  </tr>
      </table><br />
      <div class="description">   
            <?php echo read_more($sh['deskripsi'],175); ?>
            <a class="more-link" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>">[Selengkapnya]</a>
      </div>
  </div> 
<?php   
            }//end while
        break;
        
    case 'detailhotel' :
            $detailhotel = mysql_query("SELECT hotel.*, kategori_hotel.nama_kategori, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                                       FROM hotel INNER JOIN kategori_hotel ON hotel.id_kategori=kategori_hotel.id_kategori 
                                       JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                                       JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                                       JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                                       WHERE hotel.status = '1' AND id_hotel ='$_GET[id]' ORDER BY hotel.id_hotel ASC") OR die(mysql_error());
            while($dh = mysql_fetch_array($detailhotel))
            {
?>
<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$dh['id_hotel'].'-'.$dh['nama_seo'].'.html'; ?>"><?php echo $dh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
            <?php        
            if ($dh['id_kategori'] == 6){
                for($i = 0; $i < 6; $i++) echo '<span class="rating-star"></span>';
            }
            else{
                $nobintang = 5 - $dh['id_kategori'];
                for($i = 0; $i < $dh['id_kategori'] ; $i++) echo '<span class="rating-star rating-star-hover"></span>';
                for($i = 0; $i < $nobintang; $i++) echo '<span class="rating-star"></span>';                  
            }  
            ?>            
        </div>        
      </div>
      <?php if (!empty( $dh['foto'])) { ?>                          
      <div class="thumb-news thumbnail">
        <a href="<?php echo IMG_POST_URL.'/'.$dh['foto']; ?>">
            <img src="<?php echo IMG_POST_URL.'/small_'.$dh['foto']; ?>"/>
        </a>
      </div>
      <?php } ?>
      <div class="description"> 
      <span class="title">Deskripsi : </span>  
            <?php echo $dh['deskripsi']; ?>
      </div>
   	  
      <table class='table-info'>
	  <tr>
			<td class="title-info">Rate Per Hari</td>
			<td width='7px'> : </td>
			<td class="rate"><?php echo  rupiah($dh['min_harga']).' / '. rupiah($dh['max_harga']); ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Jenis Hotel</td>
			<td width='7px'> : </td>
			<td class="place"><?php echo $dh['jenis_hotel']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Wilayah</td>
			<td width='7px'> : </td>
			<td class="place"><a href="#" title='Lihat Lokasi' alt='Lihat Lokasi'><?php echo $dh['nama_kelurahan']; ?></a></td>
	  </tr>
	  <tr>
			<td class="title-info">Telphon</td>
			<td width='7px'> : </td>
			<td class="place"><?php echo $dh['telphon']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Website</td>
			<td width='7px'> : </td>
			<td class="place"> <?php echo $dh['website']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Email</td>
			<td width='7px'> : </td>
			<td class="place"><?php echo $dh['email']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Alamat</td>
			<td width='7px'> : </td>
			<td class="place"><?php echo $dh['alamat']; ?></td>
	  </tr>
      </table>
       
      <div class="google-map">
        <?php echo $dh['map']; ?>
      </div>
  </div> 
<?php   
            }//end while
        break; //break detail
        
        case 'hasilcari' :
            if($_POST['submit']){      
                
                $query = "SELECT hotel.*, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                           FROM hotel INNER JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                           JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                           JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                           WHERE hotel.status = '1' ";
                           
                $query .= (isset($_POST['nama_hotel'])) ? ($_POST['nama_hotel'] != '') ? "AND hotel.nama_hotel ='".$_POST['nama_hotel']."' " : '': '';                           
                $query .= (isset($_POST['id_kategori'])) ? ($_POST['id_kategori'] != 0) ? "AND hotel.id_kategori = '".$_POST['id_kategori']."' " : '': '';
                $query .= (isset($_POST['id_jaringan'])) ? ($_POST['id_jaringan'] != 0) ? "AND hotel.id_jaringan = '".$_POST['id_jaringan']."' " : '': '';
                $query .= (isset($_POST['id_kelurahan'])) ? ($_POST['id_kelurahan'] != 0) ? "AND hotel.id_kelurahan = '".$_POST['id_kelurahan']."' " : '': '';
                $query .= (isset($_POST['id_jenis'])) ? ($_POST['id_jenis'] != 0) ? "AND hotel.id_jenis = '".$_POST['id_jenis']."' " : '': '';
                $query .= (isset($_POST['min_harga'])) ? ($_POST['min_harga'] != 0) ? "AND hotel.min_harga < '".$_POST['min_harga']."' " : '': '';
                $query .= (isset($_POST['max_harga'])) ? ($_POST['max_harga'] != 0) ? "AND hotel.max_harga > '".$_POST['max_harga']."' " : '':
                
                $query .= 'ORDER BY hotel.id_hotel ASC';
                $hasilcari = mysql_query($query);
                $jum = mysql_num_rows($hasilcari);
                
                if ($jum > 0){                                  
                    echo '<div class="search-result">Ditemukan '.$jum.' Hotel Yang Sesuai :</div>';             
                    while($sh = mysql_fetch_array($hasilcari))
                    {
?>
<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>"><?php echo $sh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
            <?php        
            if ($sh['id_kategori'] == 6){
                for($i = 0; $i < 6; $i++) echo '<span class="rating-star"></span>';
            }
            else{
                $nobintang = 5 - $sh['id_kategori'];
                for($i = 0; $i < $sh['id_kategori'] ; $i++) echo '<span class="rating-star rating-star-hover"></span>';
                for($i = 0; $i < $nobintang; $i++) echo '<span class="rating-star"></span>';                  
            }  
            ?>            
        </div>        
      </div>
      <?php if (!empty( $sh['foto'])) { ?>                          
      <div class="thumb-news">
        <a href="<?php echo IMG_POST_URL.'/'.$sh['foto']; ?>">
            <img src="<?php echo IMG_POST_URL.'/small_'.$sh['foto']; ?>"/>
        </a>
      </div>
      <?php } ?>
	  <table class='table-info'>
	  <tr>
			<td>Rate Per Hari</td>
			<td width='7px'> : </td>
			<td><span class="rate"> <?php echo  rupiah($sh['min_harga']).' / '. rupiah($sh['max_harga']); ?></span></td>
	  </tr>
	  <tr>
			<td>Jenis Hotel</td>
			<td width='7px'> : </td>
			<td><span class="place"><?php echo $sh['jenis_hotel']; ?></span></td>
	  </tr>
	  <tr>
			<td>Wilayah</td>
			<td width='7px'> : </td>
			<td><span class="place"> <a href="#" title='Lihat Lokasi' alt='Lihat Lokasi'><?php echo $sh['nama_kelurahan']; ?></a></span></td>
	  </tr>
      </table><br />
      <div class="description">   
            <?php echo read_more($sh['deskripsi'],175); ?>
            <a class="more-link" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>">[Selengkapnya]</a>
      </div>
  </div> 
<?php   
                }//end while            
            }//end Jum
            else{
                echo '<center><div class="search-result">Hotel Yang Anda Cari TIdak DiTemukan</div></center>'; 
            }           
        }//end POST Submit while
        break;
        
        case 'hubungikami' :
 
        if(isset($_POST['submit'])){
            $nama   = trim($_POST['nama']);
            $email  = trim($_POST['email']);
            $subjek = trim($_POST['subjek']);
            $pesan  = trim($_POST['pesan']);
        echo '<div class="item">';
            if (empty($nama)){
                echo 'Anda belum mengisikan <b>NAMA<b>
                <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
            }
            elseif (empty($email)){
                echo 'Anda belum mengisikan <b>EMAIL</b>
                <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
            }
            elseif (empty($subjek)){
                echo 'Anda belum mengisikan <b>SUBJEK</b>
                <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
            }
            elseif (empty($pesan)){
                echo 'Anda belum mengisikan <b>PESAN</b>
                <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
            }
            else{
	           if(!empty($_POST['kode'])){
                    if($_POST['kode']==$_SESSION['captcha_session']){

                        mysql_query("INSERT INTO hubungi(nama, email, subjek, pesan, tanggal) 
                                     VALUES('$_POST[nama]','$_POST[email]','$_POST[subjek]','$_POST[pesan]','$this_date')");
                        echo '<p align="center"><b>Terimakasih telah menghubungi kami. <br /> Kami akan segera meresponnya.</b>
                        <a href="javascript:history.go(-1)"><span class="badge badge-warning"></span></a></p>';
		          }
                  else{
                    echo '<b>KODE</b> yang Anda masukkan tidak cocok
			         <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
		          }
            }
            else{
                echo 'Anda belum memasukkan <b>KODE</b>
                <a href="javascript:history.go(-1)"><span class="badge badge-warning">Ulangi Lagi</span></a>';
	       }
        }
    echo '</div>';
    }
    else{
    $about = mysql_query('SELECT * FROM page WHERE id_page=3');
    $a = mysql_fetch_array($about);
    echo '<div class="item">';
    echo '<h3>'.$a['judul'].'</h3>';
    echo '<div class="description">'.$a['isi'].'</div>';
    echo '</div>';
?>                
    <div class="respond">	   
    <h3>Hubungi Kami</h3>
    	<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    	    <fieldset>
    		    <label>Nama:<span class="required">*</span></label>
    			<input type="text" name="nama" placeholder="Nama"/>
    			<label>Email:<span class="required">*</span></label>
    			<input type="text" name="email" placeholder="Email"/>
    			<label>Subjek:</label>
    			<input type="text" name="subjek" placeholder="Subject"/>
                <label>Pesan:<span class="required">*</span></label>        
    	        <textarea name="pesan"  rows="3"></textarea><br />
                <label><img src='captcha.php'/></label> 
                <label>Masukkan 6 kode diatas <span class="required">*</span></label>            
                <input type="text" name="kode" class="captha" maxlength="6"/>				
    	    </fieldset>
        	<p  id="post-comment">
                <input name="submit" class="btn btn-primary" type="submit" value="Submit"/>
            </p>
    	</form>   
    </div> 
            
<?php 
                    
        }//end POST if

        break;
        case 'informasi' :
            $informasi = mysql_query('SELECT * FROM page WHERE id_page=1');
            $info = mysql_fetch_array($informasi);
            echo '<div class="item">';
            echo '<h3>'.$info['judul'].'</h3>';
            echo '<div class="description">'.$info['isi'].'</div>';
            echo '</div>';
        break;
        
        case 'bantuan' :
            $bantuan = mysql_query('SELECT * FROM page WHERE id_page=2');
            $bantu = mysql_fetch_array($bantuan);
            echo '<div class="item">';
            echo '<h3>'.$bantu['judul'].'</h3>';
            echo '<div class="description">'.$bantu['isi'].'</div>';
            echo '</div>';
        break;     
    }//end switch
    
}//end main if
?>
