<?php
if( ! defined('ADMIN_PATH') || count(get_included_files())==1) 
{
    echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
    exit('Direct access not permitted.');  
}
  
include ADMIN_PATH.'/val_session.php';
?>

<div class="row-fluid">
<?php if (isset($_SESSION['hotel']['result'])) {
    switch ($_SESSION['hotel']['result'])
    {
         case 'input':
            echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>'; 
            echo '<p>Input Data Berhasil !</p>';
            echo '</div>';
         break;
         case 'update':
            echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>'; 
            echo '<p>Update Data Berhasil !</p>';
            echo '</div>';
         break; 
         case 'failed':
            echo '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>'; 
            echo '<p>Terjadi Kesalahan Dalam Input/Update Data !</p>';
            echo '</div>';
         break;     
    }

}
?>
<!-- block -->
<div class="block">
	
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left">Data Hotel</div>
	</div>
	<div class="block-content collapse in">			
		<div class="span12">
			<button class="btn btn-primary" onClick="location.href='main.php?module=a_hotel'">Tambah Hotel</button><br/><br/>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>Nama Hotel</th>
						<th>Kategori</th>
                        <th>Jenis</th>
                        <th>Jaringan</th>
						<th>Status</th>
						<th class="action">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$result=mysql_query("SELECT hotel.*, kategori_hotel.nama_kategori, jenis_hotel.jenis_hotel, jaringan_hotel.nama_jaringan
                                     FROM hotel inner join kategori_hotel on hotel.id_kategori = kategori_hotel.id_kategori 
                                     join jenis_hotel on hotel.id_jenis = jenis_hotel.id_jenis 
                                     join jaringan_hotel on hotel.id_jaringan = jaringan_hotel.id_jaringan ORDER BY hotel.id_kategori DESC");
				$no=1;
				while($row=mysql_fetch_array($result))
				{
					$status = ($row['status'] == 0) ? 'Unpublished' : 'Published';
					
					echo '<tr>
					<td>'.$row['nama_hotel'].'</td>
                    <td>'.$row['nama_kategori'].'</td>
                    <td>'.$row['jenis_hotel'].'</td>
                    <td>'.$row['nama_jaringan'].'</td>
					<td>'.$status.'</td>									
					<td class="action">			      
						<a href="main.php?module=e_hotel&id='.$row['id_hotel'].'" class="btn btn-info btn-mini" title="Update" >Update</a>            
						<a href="'.ADMIN_URL.'/module/hotel/act_hotel.php?act=del&module=hotel&id='.$row['id_hotel'].'" 
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
 <?php
    if (isset($_SESSION['hotel'])) unset ($_SESSION['hotel']);
?>