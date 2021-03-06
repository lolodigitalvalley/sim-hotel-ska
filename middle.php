<?php 
if (isset($_GET['module'])){
    
    $module = str_replace('/','',str_replace('\\','',$_GET['module']));
    
    switch ($module){
        case 'home' :
            $batas  = 6;
            $posisi = 0;
            
            $sql = "SELECT hotel.*, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                                       FROM hotel INNER JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                                       JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                                       JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                                       WHERE hotel.status = '1' ORDER BY hotel.id_hotel ASC";
                                       
            $semuahotel = mysql_query($sql." LIMIT $posisi,$batas") OR die(mysql_error());
            while($sh = mysql_fetch_array($semuahotel))
            {
?>
<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>"><?php echo $sh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
                <?php create_star( $sh['id_kategori'])?>            
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
			<td width="7px"> : </td>
			<td><span class="rate"> <?php echo rupiah($sh['min_harga']).' / '. rupiah($sh['max_harga']); ?></span></td>
	  </tr>
	  <tr>
			<td>Jenis Hotel</td>
			<td> : </td>
			<td><span class="place"><?php echo $sh['jenis_hotel']; ?></span></td>
	  </tr>
	  <tr>
			<td>Wilayah</td>
			<td> : </td>
			<td><span class="place"> <?php echo $sh['nama_kelurahan']; ?></span></td>
	  </tr>
      </table>
      <div class="description">   
            <?php echo read_more($sh['deskripsi'],175); ?>
            <a class="more-link" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>">[Selengkapnya]</a>
      </div>
  </div> 
<?php   
            }//end while

        break;
        case 'detailkategori' :
            $p      = new Paging;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            
            $sql = "SELECT hotel.*, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                    FROM hotel INNER JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                    JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                    JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                    WHERE hotel.id_kategori =".filter_int($_GET['id'])." AND hotel.status = '1' ORDER BY hotel.id_hotel ASC";
                                       
            $semuahotel = mysql_query($sql.' LIMIT '.$posisi.','.$batas) OR die(mysql_error());
            while($sh = mysql_fetch_array($semuahotel))
            {
?>
<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>"><?php echo $sh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
            <?php create_star( $sh['id_kategori'])?>          
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
			<td width="7px"> : </td>
			<td><span class="rate"> <?php echo rupiah($sh['min_harga']).' / '. rupiah($sh['max_harga']); ?></span></td>
	  </tr>
	  <tr>
			<td>Jenis Hotel</td>
			<td> : </td>
			<td><span class="place"><?php echo $sh['jenis_hotel']; ?></span></td>
	  </tr>
	  <tr>
			<td>Wilayah</td>
			<td> : </td>
			<td><span class="place"> <?php echo $sh['nama_kelurahan']; ?></span></td>
	  </tr>
      </table>
      <div class="description">   
            <?php echo read_more($sh['deskripsi'],175); ?>
            <a class="more-link" href="<?php echo 'hotel-'.$sh['id_hotel'].'-'.$sh['nama_seo'].'.html'; ?>">[Selengkapnya]</a>
      </div>
  </div> 
<?php   
            }//end while

                    $jmldata     =  mysql_num_rows(mysql_query($sql));
                    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
                    $linkHalaman = $p->navHalaman(filter_text($_GET['halkategori']), $jmlhalaman);
                     
                    echo  $linkHalaman;

        break;  
          
    case 'detailhotel' :
            $detailhotel = mysql_query("SELECT hotel.*, kategori_hotel.nama_kategori, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan, kelurahan.nama_kelurahan 
                                       FROM hotel INNER JOIN kategori_hotel ON hotel.id_kategori=kategori_hotel.id_kategori 
                                       JOIN jenis_hotel ON hotel.id_jenis = jenis_hotel.id_jenis 
                                       JOIN jaringan_hotel ON hotel.id_jaringan = jaringan_hotel.id_jaringan 
                                       JOIN kelurahan ON hotel.id_kelurahan = kelurahan.id_kelurahan 
                                       WHERE hotel.status = '1' AND id_hotel ='".filter_int($_GET['id'])."' ORDER BY hotel.id_hotel ASC") OR die(mysql_error());
           $dh = mysql_fetch_array($detailhotel);
            
?>

<div class="item">
      <a class="title" href="<?php echo 'hotel-'.$dh['id_hotel'].'-'.$dh['nama_seo'].'.html'; ?>"><?php echo $dh['nama_hotel'];  ?></a>
      <div class="info">
        <div class="rating">
            <?php create_star( $dh['id_kategori'])?>            
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
   	  
      <table class="table-info">
	  <tr>
			<td class="title-info">Rate Per Hari</td>
			<td width="7px"> : </td>
			<td class="rate"><?php echo  rupiah($dh['min_harga']).' / '. rupiah($dh['max_harga']); ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Jenis Hotel</td>
			<td> : </td>
			<td class="place"><?php echo $dh['jenis_hotel']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Wilayah</td>
			<td> : </td>
			<td class="place"><?php echo $dh['nama_kelurahan']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Telphon</td>
			<td> : </td>
			<td class="place"><?php echo $dh['telphon']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Website</td>
			<td> : </td>
			<td class="place"><a href="<?php echo $dh['website']; ?>" title='Lihat Website'><?php echo $dh['website']; ?></a></td>
	  </tr>
	  <tr>
			<td class="title-info">Email</td>
			<td> : </td>
			<td class="place"><?php echo $dh['email']; ?></td>
	  </tr>
	  <tr>
			<td class="title-info">Alamat</td>
			<td> : </td>
			<td class="place"><?php echo $dh['alamat']; ?></td>
	  </tr>
      </table>       
      <div id="map" class="google-map"></div>
      <form class="form-inline" action="direction.html" method="POST">
            <input type="hidden" name="destination" value="<?php echo $dh['latitude'].','.$dh['longitude']; ?>"/>
            <input type="text" name="origin" class="input-large" placeholder="Lokasi Anda"/>
            <button type="submit" class="btn btn-primary">Rute</button>
      </form>
  </div>
  
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQxFMPwj80PFpdF8QkDjQsTakKKIi0zfQ&language=id&libraries=geometry,weather" type="text/javascript"></script>
	<script type="text/javascript">
<?php
     echo 'var locations = [['.$dh['latitude'].','.$dh['longitude'].',"'.$dh['nama_hotel'].'","'.$dh['alamat'].'"]]';    
?>

	function initialize() {
		var latlng = new google.maps.LatLng(locations[0][0], locations[0][1]);
		var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		// Langkah 3
		var map = new google.maps.Map(document.getElementById("map"), 
		myOptions);
		
		var infowindow = new google.maps.InfoWindow();
		var marker, i;
		
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[0][0], locations[0][1]),
			map: map
		});    
		
		google.maps.event.addListener(marker, 'click', function(){
			infowindow.setContent("Nama Hotel : "+locations[0][2]+"<br />Alamat : "+locations[0][3]+"<br/> <a href='http://maps.google.com/maps?q="+locations[0][0]+","+locations[0][1] +"&ll="+locations[0][0]+","+locations[0][1] +"&z=13' target='_blank'>Lihat Di Google</a> \n");
			infowindow.open(map, marker);
		});
		
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<?php 
        
	break; //break detail
	
	case 'peta';
?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAQxFMPwj80PFpdF8QkDjQsTakKKIi0zfQ&sensor=false;"></script>
	<script type="text/javascript">
<?php
	include 'config/geocode_lib.php';
	$pt = geocode('Surakarta');
    echo 'var locations = [['.$pt[0].','.$pt[1].']]';    
?>

	function initialize() {
		var latlng = new google.maps.LatLng(locations[0][0], locations[0][1]);
		var myOptions = {
		zoom: 13,
		center: latlng,
		pane: "floatPane",
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		// Langkah 3
		var map = new google.maps.Map(document.getElementById("map"), 
		myOptions); 
		
		// marker = new google.maps.Marker({
			// position: new google.maps.LatLng(locations[0][0], locations[0][1]),
			// map: map
		// });
		
		google.maps.event.addListener(map, 'click', function(overlay, latlng){
			if (latlng) {
			var myHtml = "Latitude & Longitude:" +map.fromLatLngToDivPixel(latlng) + " , zoom level " + map.getZoom();
				map.openInfoWindow(latlng, myHtml);
				//infowindow.open(latlng, myHtml);
			}
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
<script type="text/javascript">

function tambah_marker(mpeta,mjudul,mposisi,mikon) 
{
	if (mikon=="") {mikon="http://www.google.com/mapfiles/marker.png"};

	var marker = new google.maps.Marker({
		map:mpeta,
		title:mjudul,
		icon: mikon,
		position: mposisi
	});
}
</script>
	<div class="item">  
			<div id="map" style="width:600px; height:400px; margin: 5px auto; "></div>   
			<form class="form-inline" action="searching.html" method="POST">            
				<input type="text" name="address" class="input-large" placeholder="Lokasi Anda"/>
				<button type="submit" class="btn btn-primary">Cari</button>
			</form>
	</div>	
<?php		
	break;

	case 'searching':
		include 'config/geocode_lib.php';
		
		if (isset($_POST['address']))
		{
			$alamat = $_POST['address'];
			//$alamat = array(0=>-7.559532,1=>110.82219,3=>'OK');
			if($alamat <> "")
			{
				$alamat = geocode($alamat);
				$origin = $alamat[0].', '.$alamat[1];
				
				if ($alamat[3]=="OK")
				{
					$pusat_peta = $alamat ;
					$hotel1= carintd($alamat[0],$alamat[1],"");
					$hotel2= carintd($alamat[0],$alamat[1],$hotel1[5]);

					$batas_jarak = 30;
					if($hotel1[2] <= $batas_jarak  or $hotel2[2] <= $batas_jarak  ){
						$marker1 = $hotel1;
						$marker2 = $hotel2; 
					}	
					else{
						echo "Lokasi berjarak $batas_jarak KM lebih dari Surakarta, tidak ada data hotel yang ditampilkan";
						exit;
					}
				}
				else{
					//$pusat_peta = geocode('Surakarta');
					echo "Alamat tidak ditemukan, silahkan coba lagi";
					exit;
				}
			}	
			else{
				$pusat_peta = geocode('Surakarta');
				echo "Alamat tidak ditemukan, silahkan coba lagi";
				exit;
			}
		}
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAQxFMPwj80PFpdF8QkDjQsTakKKIi0zfQ&sensor=false;"></script>

<script type="text/javascript">
function initialize() 
{
	<?php
        echo "var latlng = new google.maps.LatLng($pusat_peta[0], $pusat_peta[1]);";
    ?>
   
   var myOptions = {
		zoom : 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("map"),myOptions);
    tambah_marker(peta,"<?php  echo $pusat_peta[2]; ?>",latlng,'');
    <?php
			echo "var latlngm1 = new google.maps.LatLng($marker1[0],$marker1[1]);";	
			echo "var latlngm2 = new google.maps.LatLng($marker2[0],$marker2[1]);";
			echo "var ikon1 = 'http://maps.google.com/mapfiles/kml/pal3/icon0.png';";
			echo "var ikon2 = 'http://maps.google.com/mapfiles/kml/pal3/icon1.png';";

			echo "tambah_marker(peta,'$marker1[2]',latlngm1,ikon1);";
			echo "tambah_marker(peta,'$marker2[2]',latlngm2,ikon2);";
			echo "var batas = new google.maps.LatLngBounds();";
			echo "batas.extend(latlng);";
			echo "batas.extend(latlngm1);";
			echo "batas.extend(latlngm2);";
			echo "peta.fitBounds(batas);";
	?>
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">

function tambah_marker(mpeta,mjudul,mposisi,mikon) 
{
	if (mikon=="") {mikon="http://www.google.com/mapfiles/marker.png"};

	var marker = new google.maps.Marker({
		map:mpeta,
		title:mjudul,
		icon: mikon,
		position: mposisi
	});
}
</script>

<div class="item">  
	<div id="map" style="width:600px; height:400px; margin: 5px auto; "></div> 
	<table class="table table-striped table-bordered">
		<thead>
			<tr><th>No</th><th>Nama</th><th>Jarak</th><th Align="center">Aksi</th></tr>
		</thead>
		<tbody>
		<?php
			$jarak1=round($marker1[2],2);
			$jarak2=round($marker2[2],2);
			$dest1 = $marker1[0].', '.$marker1[1];
			$dest2 = $marker2[0].', '.$marker2[1];
			
			echo '<tr><td>1.</td><td>'.$marker1[5].'</td><td>'.$jarak1.' Km</td>
			<td><a class="more-link" href="hotel-'.$marker1[3].'-'.$marker1[4].'.html">Detail</a> | 
			<a class="more-link" href="media.php?module=rute&origin='.$origin.'&dest='.$dest1.'">Rute</a></td></tr>';
			echo '<tr><td>2.</td><td>'.$marker2[5].'</td><td>'.$jarak2.' Km</td>
			<td><a class="more-link" href="hotel-'.$marker2[3].'-'.$marker2[4].'.html">Detail</a> |	
			<a class="more-link" href="rute/'.$origin.'/'.$dest2.'">Rute</a></td></tr></td></tr>';
			
		?>
		<tbody>	
	</table>
</div>

<?php
	break;	
	
	
    case 'direction' :
		if(isset($_POST)) 
		{
			$origin = isset($_POST['origin']) ? $_POST['origin'] : '';
			$destination = isset($_POST['destination']) ? $_POST['destination'] : '' ;
		}
?>
<div class="item">           
    <div class="row">
     	  <div id="panel-direction" class="span2"></div> 
         <div id="map-direction" class="span2"></div>   
    </div>
</div>

   <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAQxFMPwj80PFpdF8QkDjQsTakKKIi0zfQ&sensor=false;"></script>
   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map-direction'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel-direction'));

     var request = {
       origin: '<?=$origin;?>', 
       destination: '<?=$destination;?>',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script> 
<?php      
        
        break;  
  case 'rute' :
		if(! empty($_GET)) 
		{
			$origin = isset($_GET['origin']) ? $_GET['origin'] : '';
			$destination = isset($_GET['dest']) ? $_GET['dest'] : '' ;
		}
?>
<div class="item">           
    <div class="row">
     	  <div id="panel-direction" class="span2"></div> 
         <div id="map-direction" class="span2"></div>   
    </div>
</div>

   <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAQxFMPwj80PFpdF8QkDjQsTakKKIi0zfQ&sensor=false;"></script>
   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map-direction'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel-direction'));

     var request = {
       origin: '<?=$origin;?>', 
       destination: '<?=$destination;?>',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script> 
<?php      
        
        break;
		
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
            <?php create_star( $sh['id_kategori'])?>           
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
			<td><span class="place"> <?php echo $sh['nama_kelurahan']; ?></span></td>
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
echo '<div class="item">'; 
        if(isset($_POST['submit'])){
            $nama   = trim($_POST['nama']);
            $email  = trim($_POST['email']);
            $subjek = trim($_POST['subjek']);
            $pesan  = trim($_POST['pesan']);
     
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
    }
    else{
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
                <input name="submit" class="btn btn-warning" type="submit" value="Submit"/>
            </p>
    	</form>   
    </div> 
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
        
        case 'tentangaplikasi':
            $about = mysql_query('SELECT * FROM page WHERE id_page=3');
            $a = mysql_fetch_array($about);
            echo '<div class="item">';
            echo '<h3>'.$a['judul'].'</h3>';
            echo '<div class="description">'.$a['isi'].'</div>';
            echo '</div>';        
        break;  





	case 'tes':
	echo '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div class="item">  
			<form class="form-inline" action="tes.html" method="POST">            
				<input type="text" name="address" class="input-large" placeholder="Lokasi Anda"/>
				<button type="submit" class="btn btn-primary">Cari</button>
			</form>
	</div>';	
	
	if(isset($_POST['address']))
	{
		include 'config/geocode_libx.php';
		$alamat = $_POST['address'];
		$alamat = geocode($alamat);
		$hotel1= carintd($alamat[0],$alamat[1],"");
		//echo $alamat[0].', '.$alamat[1];
	}
	break;		
    }//end switch
    
}//end main if
?>
