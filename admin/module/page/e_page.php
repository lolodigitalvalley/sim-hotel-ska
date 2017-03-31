<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}
    
include ADMIN_PATH.'/val_session.php';

if(val_number($_GET['id']))
{
    $id   = filter_int($_GET['id']);
    $edit = mysql_query("SELECT * FROM page WHERE id_page=".$id);
    $jum  = mysql_num_rows($edit);
    if ($jum > 0)
    {
        $row = mysql_fetch_array($edit);
?>

<!-- morris stacked chart -->
<div class="row-fluid">
<!-- block -->
<div class="block">
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left"><a href="<?php echo ADMIN_URL.'/main.php?module=page';?>">Halaman Statis</a> &#187; Edit Halaman Statis</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/page/act_page.php?act=edit&module=page';?>">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Kategori</label>
				  <div class="controls">
                    <input type="hidden" name="id" value="<?php echo $row['id_page']; ?>"/>
					<input class="input-xlarge focused" id="focusedInput" type="text" name="judul" value="<?php echo $row['judul']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Isi Website</label>
				  <div class="controls">
					<textarea class="ckeditor" name="isi"><?php echo $row['isi']; ?></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Status</label>
					<div class="controls">
						<select name="status">
                        <?php
            			if ($row['status']=='1'){
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

<?php
    }
}
?>


