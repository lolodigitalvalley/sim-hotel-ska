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
		<div class="muted pull-left">Tambah Jaringan Hotel</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/jaringan_hotel/act_jaringanhotel.php?act=add&module=jaringan_hotel';?>">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Jaringan Hotel</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="nama_jaringan"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Deskripsi</label>
				  <div class="controls">
					<textarea class="ckeditor" name="deskripsi"></textarea>
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
