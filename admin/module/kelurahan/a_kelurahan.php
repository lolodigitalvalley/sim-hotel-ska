<?php
if(!defined('ADMIN_PATH') || count(get_included_files())==1){
  	echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
	exit('Direct access not permitted.');
} 
include ADMIN_PATH.'/val_session.php';

?>

<!-- morris stacked chart -->
<div class="row-fluid">
<!-- block -->
<div class="block">
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left">Tambah Kelurahan</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/kelurahan/act_kelurahan.php?act=add&module=kelurahan';?>">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Kelurahan</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="nama_kelurahan"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Kecamatan</label>
					<div class="controls">                        
						<select name="id_kecamatan">
                        <?php
                        $kecamatan = mysql_query('SELECT * FROM kecamatan ORDER BY id_kecamatan ASC');
                        while($row=mysql_fetch_array($kecamatan))
                        {
                           echo '<option value="'.$row['id_kecamatan'].'">'.$row['nama_kecamatan'].'</option>';
                        }                        
                        ?>
						</select>
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
