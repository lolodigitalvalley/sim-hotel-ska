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
		<div class="muted pull-left">Halaman Statis</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
			<!--
<button class="btn btn-primary" onClick="location.href='main.php?module=a_page'">Tambah Page</button><br/><br/>
-->
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul</th>
						<th width="500px">Deskripsi</th>
						<th>Status</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT * FROM page ORDER BY id_page ASC");
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					$status = ($row['status'] == 0) ? 'Unpublished' : 'Published';
					
					echo '<tr>
					<td class="chb">'.$no.'</td>
					<td>'.$row['judul'].'</td>
                    <td>'.read_more($row['isi']).'</a></td>
					<td>'.$status.'</td>									
					<td class="action">	     
						<a href="main.php?module=e_page&id='.$row['id_page'].'" class="btn btn-info btn-mini" title="Update" >Update</a>            
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