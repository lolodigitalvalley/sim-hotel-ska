<div class="col-post"> 
<h3>Pencarian Hotel</h3>
<form class="form" method="POST" action="hasil-pencarian.html">                   
  <div class="field-group">
        <?php $hotel = mysql_query('SELECT nama_hotel FROM hotel ORDER BY nama_hotel ASC');
        $nama_hotel = '[';
        $jum =mysql_num_rows($hotel);
        $i=0;
        while($nm = mysql_fetch_array($hotel) ) { 
            $i++;
            $nama_hotel .= '"'.$nm['nama_hotel'].'"';
            if($i<$jum) $nama_hotel.=',';      
        }  
        $nama_hotel .= ']';
        ?>
        <label for="nama_hotel"> Nama Hotel</label>
        <input type="text" name="nama_hotel" data-provide="typeahead" data-items="4" data-source='<?php echo $nama_hotel; ?>' />
   </div>
  <div class="field-group">
        <label>Kategori Hotel</label>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="0" checked="TRUE" />&nbsp; Semua Kategori
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="6" />&nbsp; <?php create_star(6)?>       
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="1" />&nbsp; <?php create_star(1)?>       
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="2" />&nbsp; <?php create_star(2)?>   
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="3" />&nbsp; <?php create_star(3)?>     
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="4" />&nbsp; <?php create_star(4)?>  
        </div>
        <div class="rating">
            <input type="radio" class="rating-radio" name="id_kategori" value="5" />&nbsp; <?php create_star(5)?>     
        </div>
  </div>  
  <div class="field-group">
        <label>Jaringan Hotel</label>
        <select name="id_jaringan">
        <option value="0">Semua Jaringan Hotel</option>
        <?php 
        $jaringan = mysql_query('SELECT * FROM jaringan_hotel ORDER BY id_jaringan ASC') or die(mysql_error());
        while($jar = mysql_fetch_array($jaringan) ) echo '<option value='.$jar['id_jaringan'].'/>'.$jar['nama_jaringan'].'</option>';        
        ?>
        </select>
  </div>
  <div class="field-group">
        <label> Wilayah</label>
        <select name="id_kelurahan">
        <option value="0">Semua Wilayah</option>
        <?php 
        $kelurahan = mysql_query('SELECT * FROM kelurahan ORDER BY id_kelurahan ASC') or die(mysql_error());
        while($kel = mysql_fetch_array($kelurahan) ) echo '<option value='.$kel['id_kelurahan'].'/>'.$kel['nama_kelurahan'].'</option>';        
        ?>
        </select>
  </div>
  <div class="field-group">
        <label> Jenis Hotel</label>
        <select name="id_jenis">
        <option value="0">Semua Jenis Hotel</option>
        <?php 
        $jenis = mysql_query('SELECT * FROM jenis_hotel ORDER BY id_jenis ASC') or die(mysql_error());
        while($jen = mysql_fetch_array($jenis) ) echo '<option value='.$jen['id_jenis'].'/>'.$jen['jenis_hotel'].'</option>';        
        ?>
        </select>
  </div> 
  <div class="field-group">
        <label> Harga Termurah</label>
        <select name="min_harga">
        <option value="0">Semua Harga</option>
        <option value="100000"> &lt; <?php echo rupiah(100000) ?> </option>
        <option value="200000"> &lt; <?php echo rupiah(200000) ?> </option>
        <option value="400000"> &lt; <?php echo rupiah(400000) ?> </option>
        <option value="800000"> &lt; <?php echo rupiah(800000) ?> </option>
        <option value="1200000"> &lt; <?php echo rupiah(1200000) ?> </option>
        <option value="1600000"> &lt; <?php echo rupiah(1600000) ?> </option>
        <option value="2000000"> &lt; <?php echo rupiah(2000000) ?> </option>
        </select>
  </div> 
  <div class="field-group">
        <label> Harga Termahal</label>
        <select name="max_harga">
        <option value="0">Semua Harga</option>
        <option value="1000000"> &gt; <?php echo rupiah(1000000) ?> </option>
        <option value="2000000"> &gt; <?php echo rupiah(2000000) ?> </option>
        <option value="4000000"> &gt; <?php echo rupiah(4000000) ?> </option>
        <option value="8000000"> &gt; <?php echo rupiah(8000000) ?> </option>
        <option value="12000000"> &gt; <?php echo rupiah(12000000) ?> </option>
        <option value="16000000"> &gt; <?php echo rupiah(16000000) ?> </option>
        <option value="20000000"> &gt; <?php echo rupiah(20000000) ?> </option>
        </select>
  </div>                   
  <div class="field-group">
      <p>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
      </p>
  </div>  
</form>            
</div>  