<?php
date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$name_of_day   = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

$name_of_month = array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
					"Juni", "Juli", "Agustus", "September", 
					"Oktober", "November", "Desember");
                    
$day= date("w");
$this_day_name= $name_of_day[$day];

$this_date    = date("Y-m-d");
$this_day     = date("d");
$this_month   = date("m");
$this_year    = date("Y");
$this_time    = date("H:i:s");


                    
function time_format($time){
    return date('h:m:s',$time);
}
                    
function num_to_month($bln){
	switch ($bln){
		case 1:return "Januari";break;
		case 2:return "Februari";break;
		case 3:return "Maret";break;
		case 4:return "April";break;
		case 5:return "Mei";break;
		case 6:return "Juni";break;
		case 7:return "Juli";break;
		case 8:return "Agustus";break;
		case 9:return "September";break;
		case 10:return "Oktober";break;
		case 11:return "November";break;
		case 12:return "Desember";break;
	}
}
				
function tgl_indo($tgl){
		$tanggal = substr($tgl,8,2);
		$bulan = num_to_month(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;		 
}	


function month_to_num($bln){
	switch ($bln){
		case "Januari":return 1;break;						
		case "Februari":return 2;break;
        case "Maret":return 3;break;
        case "April":return 4;break;
        case "Mei":return 5;break;
        case "Juni":return 6;break;
        case "Juli":return 7;break;
        case "Agustus":return 8;break;
        case "September":return 9;break;
        case "Oktober":return 10;break;
        case "November":return 11;break;
        case "Desember":return 12;break;					
	}
}

 function tgl_mysql($tgl){
        $pecah=explode(' ',$tgl);
        $tanggal=$pecah[0];
        $bulan=month_to_num($pecah[1]);
        $tahun=$pecah[2];            
		return implode('-',array($tahun,$bulan,$tanggal));		 
}

?>