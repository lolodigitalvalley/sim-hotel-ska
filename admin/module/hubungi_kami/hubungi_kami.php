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
		<div class="muted pull-left">Hubungi Kami</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Subjek</th>
                        <th>Tanggal</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT * FROM hubungi ORDER BY tanggal ASC");
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					
					echo '<tr>
					<td class="chb">'.$no.'</td>
					<td>'.$row['nama'].'</td>                    
					<td><a href=mailto:$row[email]>'.$row['email'].'</a></td>
                    <td>'.$row['subjek'].'</a></td>	
                    <td>'.tgl_indo($row['tanggal']).'</a></td>									
					<td class="action">	     
						<a href="main.php?module=e_hubungikami&id='.$row['id_hubungi'].'" class="btn btn-info btn-mini" title="Update" >Balas</a>            
						<a href="'.ADMIN_URL.'/module/hubungi_kami/act_hubungikami.php?act=del&module=hubungi_kami&id='.$row['id_hubungi'].'" 
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