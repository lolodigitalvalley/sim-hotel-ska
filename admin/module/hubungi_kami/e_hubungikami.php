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
    $edit = mysql_query("SELECT * FROM hubungi WHERE id_hubungi=".$id);
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
		<div class="muted pull-left"><a href="<?php echo ADMIN_URL.'/main.php?module=hubungi_kami';?>">Hubungi Kami</a> &#187; Approve Pesan</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/hubungi_kami/act_hubungikami.php?act=edit&module=hubungi_kami';?>">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama</label>
				  <div class="controls">
                    <input type="hidden" name="id" value="<?php echo $row['id_hubungi']; ?>"/>
					<input class="input-xlarge focused" id="focusedInput" type="text" name="nama_hubungi" value="<?php echo $row['nama']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Email</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="email" value="<?php echo $row['email']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Subject</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="email" value="Re:<?php echo $row['subjek']; ?>"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Pesan</label>
				  <div class="controls">
					<textarea class="ckeditor" name="pesan"><br /><br />
                    (Di balas pada : <?php echo tgl_indo($this_date); ?> )
                    <hr />
                    <?php echo $row['pesan']; ?>
                    </textarea>
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


