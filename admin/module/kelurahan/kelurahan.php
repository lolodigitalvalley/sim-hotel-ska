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
		<div class="muted pull-left">Kelurahan</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
			<button class="btn btn-primary" onClick="location.href='main.php?module=a_kelurahan'">Tambah Kelurahan</button><br/><br/>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Kecamatan</th>
                        <th>Nama Kelurahan</th>	
						<th>Status</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT nama_kecamatan, kelurahan.* FROM kelurahan inner join kecamatan on kelurahan.id_kecamatan = kecamatan.id_kecamatan ORDER BY kelurahan.id_kelurahan ASC") or die(mysql_error());
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					$status = ($row['status'] == 0) ? 'Unpublished' : 'Published';
					
					echo '<tr>
					<td class="chb">'.$no.'</td>
                    <td>'.$row['nama_kelurahan'].'</td>
					<td>'.$row['nama_kecamatan'].'</td>
  					<td>'.$status.'</td>									
					<td class="action">				     
						<a href="main.php?module=e_kelurahan&id='.$row['id_kelurahan'].'" class="btn btn-info btn-mini" title="Update" >Update</a>            
						<a href="'.ADMIN_URL.'/module/kelurahan/act_kelurahan.php?act=del&module=kelurahan&id='.$row['id_kelurahan'].'" 
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