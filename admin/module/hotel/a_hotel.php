<?php
if(!defined('ADMIN_PATH') || count(get_included_files())==1){
  	echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
	exit('Direct access not permitted.');
} 
include ADMIN_PATH.'/val_session.php';

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
		<div class="muted pull-left"><a href="<?php echo ADMIN_URL.'/main.php?module=hotel';?>">Data Hotel</a> &#187; Tambah Data Hotel</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/hotel/act_hotel.php?act=add&module=hotel';?>" enctype="multipart/form-data">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Hotel</label>
				  <div class="controls">
					<input class="input-xlarge focused" placeholder="ex: El-Residence" id="focusedInput" type="text" name="nama_hotel"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kategori Hotel</label>
					<div class="controls">                        
						<select name="id_kategori">
                        <?php
                        $kategori = mysql_query('SELECT * FROM kategori_hotel ORDER BY id_kategori ASC');
                        while($row=mysql_fetch_array($kategori)){
                           echo '<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
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
                        $jenis = mysql_query('SELECT * FROM jenis_hotel ORDER BY id_jenis ASC');
                        while($row=mysql_fetch_array($jenis)){
                           echo '<option value="'.$row['id_jenis'].'">'.$row['jenis_hotel'].'</option>';
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
                        while($row=mysql_fetch_array($jaringan)){
                           echo '<option value="'.$row['id_jaringan'].'">'.$row['nama_jaringan'].'</option>';
                        }                        
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Alamat</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="alamat" placeholder="ex: Jl.Singsingamaharaja No.65"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kecamatan</label>
					<div class="controls">                        
						<select name="id_kecamatan" id="kecamatan">
                        <option>Pilih Kecamtan</option> 
                        <?php
                        $kecamatan = mysql_query('SELECT * FROM kecamatan ORDER BY id_kecamatan ASC');
                        while($row=mysql_fetch_array($kecamatan)){
                           echo '<option value="'.$row['id_kecamatan'].'">'.$row['nama_kecamatan'].'</option>';
                        }                        
                        ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kelurahan</label>
					<div class="controls">                        
						<select id="kelurahan" name="id_kelurahan">
                         <option>Pilih Kelurahan</option> 
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Telphon</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="telphon" placeholder="ex: 0271-777888"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Email</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="email" placeholder="ex: admin@elresidence.com" />
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Website</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="website" placeholder="ex: http://elresidence.com" />
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Harga Kamar</label>
				  <div class="controls">
					<p><input class="input-xsmall focused" type="text" name="min_harga" placeholder="ex: 98000" /></p>         
					<input class="input-xsmall focused" type="text" name="max_harga" placeholder="ex:12800000" />            
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Latitude</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="latitude" placeholder="ex: -7.562439"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Longtitude</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="text" name="longitude" placeholder="ex: 110.81733"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Deskripsi</label>
				  <div class="controls">
					<textarea class="ckeditor" name="deskripsi"></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Foto</label>
				  <div class="controls">
					<input class="input-xsmall focused" id="focusedInput" type="file" name="xfile"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Status</label>
					<div class="controls">
						<select name="status">
							<option value="0">Unpublished</option>
							<option value="1">Published</option>
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
?>