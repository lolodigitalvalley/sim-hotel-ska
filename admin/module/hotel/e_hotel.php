<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}
    
include ADMIN_PATH.'/val_session.php';

if(isset($_GET['id']))
{
    $id   = filter_int($_GET['id']);
    $edit = mysql_query("SELECT hotel.*, id_kecamatan FROM hotel INNER JOIN kelurahan 
                         ON hotel.id_kelurahan = kelurahan.id_kelurahan WHERE id_hotel=".$id);
    $jum  = mysql_num_rows($edit);
    if ($jum > 0)
    {
        $row = mysql_fetch_array($edit);
?>

<!-- morris stacked chart -->
<div class="row-fluid">
<?php if (isset($_SESSION['hotel']['error'])) {
    echo '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>'; 
    foreach ($_SESSION['hotel']['error'] as $error) echo '<p>'.$error.'</p>';
    echo '</div>'; 
}
?>
<!-- block -->
<div class="block">
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left"><a href="<?php echo ADMIN_URL.'/main.php?module=hotel';?>">Data Hotel</a> &#187; Update Data Hotel</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/hotel/act_hotel.php?act=edit&module=hotel';?>" enctype="multipart/form-data">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Hotel</label>
				  <div class="controls">
                    <input type="hidden" name="id" value="<?php echo $row['id_hotel']; ?>"/>
					<input class="input-xlarge focused" id="focusedInput" type="text" name="nama_hotel" value="<?php echo $row['nama_hotel']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kategori Hotel</label>
					<div class="controls">                        
						<select name="id_kategori">
                        <?php
                        $kategori  = mysql_query('SELECT * FROM kategori_hotel ORDER BY id_kategori ASC');
                        while($r   = mysql_fetch_array($kategori)){ 
                            echo  ($r['id_kategori'] == $row['id_kategori']) ? '<option value="'.$r['id_kategori'].'" selected>'.$r['nama_kategori'].'</option>' : '<option value="'.$r['id_kategori'].'">'.$r['nama_kategori'].'</option>';
                        }                        
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Jenis Hotel</label>
					<div class="controls">                        
						<select name="id_jenis">
                        <?php
                        $jenis   = mysql_query('SELECT * FROM jenis_hotel ORDER BY id_jenis ASC');
                        while($r = mysql_fetch_array($jenis)){ 
                            echo  ($r['id_jenis'] == $row['id_jenis']) ? '<option value="'.$r['id_jenis'].'" selected>'.$r['jenis_hotel'].'</option>' : '<option value="'.$r['id_jenis'].'">'.$r['jenis_hotel'].'</option>';
                        }                       
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Jaringan Hotel</label>
					<div class="controls">                        
						<select name="id_jaringan">
                        <?php
                        $jaringan = mysql_query('SELECT * FROM jaringan_hotel ORDER BY id_jaringan ASC');
                        while($r  =mysql_fetch_array($jaringan)){                        
                            echo  ($r['id_jaringan'] == $row['id_jaringan']) ? '<option value="'.$r['id_jaringan'].'" selected>'.$r['nama_jaringan'].'</option>' : '<option value="'.$r['id_jaringan'].'">'.$r['nama_jaringan'].'</option>';
                        }
                                                
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Alamat</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="alamat" value="<?php echo $row['alamat']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kecamatan</label>
					<div class="controls">                        
						<select name="id_kecamatan" id="kecamatan">
                        <?php
                        $kecamatan = mysql_query('SELECT * FROM kecamatan ORDER BY id_kecamatan ASC');
                        while($r   =mysql_fetch_array($kecamatan)){
                            echo  ($r['id_kecamatan'] == $row['id_kecamatan']) ? '<option value="'.$r['id_kecamatan'].'" selected>'.$r['nama_kecamatan'].'</option>' : '<option value="'.$r['id_kecamatan'].'">'.$r['nama_kecamatan'].'</option>';
                        }                        
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kelurahan</label>
					<div class="controls">                        
						<select name="id_kelurahan" id="kelurahan">
                        <?php
                                
                        $kelurahan = mysql_query('SELECT * FROM kelurahan WHERE id_kelurahan='.$row['id_kelurahan'])or die(mysql_error());        
                        $kel=mysql_fetch_array($kelurahan);
                        echo  '<option value="'.$kel['id_kelurahan'].'" selected>'.$kel['nama_kelurahan'].'</option>';                                                
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Telphon</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="telphon" value="<?php echo $row['telphon']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Email</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="email" value="<?php echo $row['email']; ?>" />
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Harga Kamar</label>
				  <div class="controls">
					<p><input class="input-xsmall focused" type="text" name="min_harga" placeholder="Rp.Harga Terendah" value="<?php echo $row['min_harga']; ?>"/></p>         
					<input class="input-xsmall focused" type="text" name="max_harga" placeholder="Rp.Harga Tertinggi" value="<?php echo $row['max_harga']; ?>" />            
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Website</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="website" value="<?php echo $row['website']; ?>" />
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Latitude</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="latitude" value="<?php echo $row['latitude']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Longtitude</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="longitude" value="<?php echo $row['longitude']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Deskripsi</label>
				  <div class="controls">
					<textarea class="ckeditor" name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Foto</label>
				  <div class="controls">
                    <input type="hidden" name="foto" value="<?php echo $row['foto']; ?>"/>
                      <?php if (!empty( $row['foto'])) { ?>                          
                      <div class="thumb-news">
                        <a href="<?php echo IMG_POST_URL.'/'.$row['foto']; ?>">
                            <img src="<?php echo IMG_POST_URL.'/small_'.$row['foto']; ?>"/>
                        </a>
                      </div>
                      <?php } ?>
					<input class="input-xsmall focused" id="focusedInput" type="file" name="xfile"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Status</label>
					<div class="controls">
						<select name="status">
                        <?php
            			if ($row['status'] == '1'){
            			    echo '<option value="0">Unpublished</option>
            			    <option value="1" selected>Published</option>';
            			}
            			else{
            			    echo '<option value="0" selected>Unpublished</option>
            			    <option value="1" >Published</option>';
            			}
            			?>
						</select>
					</div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>

		</div>
	</div>
</div>
<!-- /block -->
</div>
<script>
$(document).ready(function(){
$("#kecamatan").change(function(){
    var kecamatan = $('#kecamatan').val();
    $.ajax({
            type : "GET",
            url: "<?php echo ADMIN_URL.'/module/hotel/pil_kelurahan.php';  ?>",
            data: "kecamatan=" + kecamatan,
            success: function(data){
               //jika data sukses diambil dari server tampilkan de <select id=kota>
               $('#kelurahan').html(data);              
            }
    });
 });
});
</script>
<?php
    if (isset($_SESSION['hotel'])) unset ($_SESSION['hotel']);
    }
}

?>


