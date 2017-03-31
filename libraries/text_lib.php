<?php
    
function seo_title($str) {
	$c = array (' ');
	$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

	$str = str_replace($d, '', $str); 

	$str = strtolower(str_replace($c, '-', $str));
 return $str;
} 

function read_more($str, $n = 100, $end_char = '&#8230;')
{
    if (trim($str) == '')
	{
		return $str;
	}
    
    $filter    = strip_tags($str); 
    $read_more = substr($filter,0,$n); 
    $read_more = substr($filter,0,strrpos($read_more,' '));
    
    if(strlen($filter) > $n) $read_more .= $end_char;
    
    return $read_more;
}

function word_limiter($str, $limit = 100, $end_char = '&#8230;')
{
	if (trim($str) == '')
	{
		return $str;
	}

	preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

	if (strlen($str) == strlen($matches[0]))
	{
		$end_char = '';
	}

	return rtrim($matches[0]).$end_char;
}

function word_censor($str, $censored, $replacement = '')
{
	if ( ! is_array($censored))
	{
		return $str;
	}

	$str = ' '.$str.' ';

	$delim = '[-_\'\"`(){}<>\[\]|!?@#%&,.:;^~*+=\/ 0-9\n\r\t]';

	foreach ($censored as $badword)
	{
		if ($replacement != '')
		{
			$str = preg_replace("/({$delim})(".str_replace('\*', '\w*?', preg_quote($badword, '/')).")({$delim})/i", "\\1{$replacement}\\3", $str);
		}
		else
		{
			$str = preg_replace("/({$delim})(".str_replace('\*', '\w*?', preg_quote($badword, '/')).")({$delim})/ie", "'\\1'.str_repeat('#', strlen('\\2')).'\\3'", $str);
		}
	}

	return trim($str);
}
        

function send_mail($from,$to,$subject,$body)
{
	$headers = '';
	$headers .= "From: $from\n";
	$headers .= "Reply-to: $from\n";
	$headers .= "Return-Path: $from\n";
	$headers .= "Message-ID: <" . md5(uniqid(time())) . "@" . $_SERVER['SERVER_NAME'] . ">\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Date: " . date('r', time()) . "\n";

	mail($to,$subject,$body,$headers);
}

function rupiah($uang)
{
	$rupiah="";
	$panjang = strlen($uang);
	while($panjang > 3)
	{
		$rupiah = "." . substr($uang,-3) . $rupiah;
		$lebar=strlen($uang)-3;
		$uang = substr($uang,0,$lebar);
		$panjang = strlen($uang);
	}
	$rupiah = "Rp. ".$uang.$rupiah.",-";
	return $rupiah;
}

function terbilang($bilangan)
{
    if($bilangan=='' || $bilangan==0)
            return "nol";
      $angka = array('0','0','0','0','0','0','0','0','0','0',
                     '0','0','0','0','0','0');
      $kata = array('','satu','dua','tiga','empat','lima',
                    'enam','tujuh','delapan','sembilan');
      $tingkat = array('','ribu','juta','milyar','triliun');
    
      $panjang_bilangan = strlen($bilangan);
    
      /* pengujian panjang bilangan */
      if ($panjang_bilangan > 15) {
        $kalimat = "Diluar Batas";
        return $kalimat;
      }
    
      /* mengambil angka-angka yang ada dalam bilangan,
         dimasukkan ke dalam array */
      for ($i = 1; $i <= $panjang_bilangan; $i++) {
        $angka[$i] = substr($bilangan,-($i),1);
      }
    
      $i = 1;
      $j = 0;
      $kalimat = "";
    
    
      /* mulai proses iterasi terhadap array angka */
      while ($i <= $panjang_bilangan) {
    
        $subkalimat = "";
        $kata1 = "";
        $kata2 = "";
        $kata3 = "";
    
        /* untuk ratusan */
        if ($angka[$i+2] != "0") {
          if ($angka[$i+2] == "1") {
            $kata1 = "seratus";
          } else {
            $kata1 = $kata[$angka[$i+2]] . " ratus";
          }
        }
    
        /* untuk puluhan atau belasan */
        if ($angka[$i+1] != "0") {
          if ($angka[$i+1] == "1") {
            if ($angka[$i] == "0") {
              $kata2 = "sepuluh";
            } elseif ($angka[$i] == "1") {
              $kata2 = "sebelas";
            } else {
              $kata2 = $kata[$angka[$i]] . " belas";
            }
          } else {
            $kata2 = $kata[$angka[$i+1]] . " puluh";
          }
        }
    
        /* untuk satuan */
        if ($angka[$i] != "0") {
          if ($angka[$i+1] != "1") {
            $kata3 = $kata[$angka[$i]];
          }
        }
    
        /* pengujian angka apakah tidak nol semua,
           lalu ditambahkan tingkat */
        if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
            ($angka[$i+2] != "0")) {
          $subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
        }
    
        /* gabungkan variabe sub kalimat (untuk satu blok 3 angka)
           ke variabel kalimat */
        $kalimat = $subkalimat . $kalimat;
        $i = $i + 3;
        $j = $j + 1;
    
      }
    
      /* mengganti satu ribu jadi seribu jika diperlukan */
      if (($angka[5] == "0") AND ($angka[6] == "0")) {
        $kalimat = str_replace("satu ribu","seribu",$kalimat);
      }
    
      return trim($kalimat);

}

function create_star($star)
{
     if ($star < 6 AND $star > 0){
        $nostar = 5 - $star;
        for($i = 0; $i < $star ; $i++) echo '<span class="rating-star rating-star-hover"></span>';
        for($i = 0; $i < $nostar; $i++) echo '<span class="rating-star"></span>';    
        
    }
    else if ($star == 6){
        for($i = 0; $i < 6; $i++) echo '<span class="rating-star"></span>';      
    }   
}
?>
