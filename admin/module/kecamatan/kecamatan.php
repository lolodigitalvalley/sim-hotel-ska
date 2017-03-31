<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}
  
include ADMIN_PATH.'/val_session.php';
?>

<div class="row-fluid">
<!-- block -->
<div class="block">
	
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left">Kecamatan</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
			<button class="btn btn-primary" onClick="location.href='main.php?module=a_kecamatan'">Tambah Kecamatan</button><br/><br/>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Kecamatan</th>	
						<th>Status</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT * FROM kecamatan ORDER BY id_kecamatan ASC");
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					$status = ($row['status'] == 0) ? 'Unpublished' : 'Published';
					
					echo '<tr>
					<td class="chb">'.$no.'</td>
					<td>'.$row['nama_kecamatan'].'</td>
  					<td>'.$status.'</td>									
					<td class="action">		    
						<a href="main.php?module=e_kecamatan&id='.$row['id_kecamatan'].'" class="btn btn-info btn-mini" title="Update" >Update</a>            
						<a href="'.ADMIN_URL.'/module/kecamatan/act_kecamatan.php?act=del&module=kecamatan&id='.$row['id_kecamatan'].'" 
						class="btn btn-danger btn-mini" title="Delete" onClick="return ConfirmDelete()">Delete</a>
					</td>
					</tr>';
					$no++;
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /block -->
</div>