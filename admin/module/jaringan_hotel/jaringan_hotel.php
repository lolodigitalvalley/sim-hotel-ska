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
		<div class="muted pull-left">Jenis Hotel</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
			<button class="btn btn-primary" onClick="location.href='main.php?module=a_jaringanhotel'">Tambah Jaringan</button><br/><br/>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Jenis Hotel</th>
						<th>Deskripsi</th>
						<th>Status</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT * FROM jaringan_hotel ORDER BY id_jaringan ASC");
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					$status = ($row['status'] == 0) ? 'Unpublished' : 'Published';
					
					echo '<tr>
					<td class="chb">'.$no.'</td>
					<td>'.$row['nama_jaringan'].'</td>
                    <td width="450px">'.read_more($row['deskripsi']).'</a></td>
					<td>'.$status.'</td>									
					<td class="action">    
						<a href="main.php?module=e_jaringanhotel&id='.$row['id_jaringan'].'" class="btn btn-info btn-mini" title="Update" >Update</a>            
						<a href="'.ADMIN_URL.'/module/jaringan_hotel/act_jaringanhotel.php?act=del&module=jaringan_hotel&id='.$row['id_jaringan'].'" 
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