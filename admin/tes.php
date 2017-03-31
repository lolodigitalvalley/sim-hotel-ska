<?php
define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));    
define ('BASE_PATH',dirname(ADMIN_PATH));

require_once BASE_PATH.'/config/connection.php';
?>

<head>
<script src="../vendors/jquery-1.9.1.min.js"></script>
<script>
          $(document).ready(function(){
            $("#kecamatan").change(function(){
                var kecamatan = $('#kecamatan').val();
                $.ajax({
                        type : "GET",
                        url: "pil_kelurahan.php",
                        data: "kecamatan=" + kecamatan,
                        success: function(data){
                           //jika data sukses diambil dari server tampilkan de <select id=kota>
                           $('#kelurahan').html(data);              
                        }
                });
             });
          });
  
        function ConfirmDelete() {
            var agree=confirm("Are you sure want to delete ? ");
            if (agree)
                return true ;
            else
                return false ;
        };
        </script>
 </head>      
                      
						<select name="id_kecamatan" id="kecamatan">
                        <?php
                        $kecamatan = mysql_query('SELECT * FROM kecamatan ORDER BY id_kecamatan ASC');
                        while($row=mysql_fetch_array($kecamatan)){
                           echo '<option value="'.$row['id_kecamatan'].'">'.$row['nama_kecamatan'].'</option>';
                        }                        
                        ?>
						</select>
                     
						<select id="kelurahan" name="id_kelurahan">
                         <option>Pilih Kelurahan</option> 
						</select>
  