<?php
// Fungsi ini digunakan untuk menghitung waktu mulai
function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
 
// Fungsi ini digunakan untuk menghitung waktu selesai
function timer_stop( $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = microtime();
    $mtime = explode( ' ', $mtime );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    return $r;
}
 
 
// Class Benchmark dari framework CodeIgniter
class Benchmark {
 
    var $marker = array();
 
    function mark($name)
    {
        $this->marker[$name] = microtime();
    }
 
    // Proses penghitungan waktu
    function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
    {
        if ($point1 == '')
        {
            return '{elapsed_time}';
        }
 
        if ( ! isset($this->marker[$point1]))
        {
            return '';
        }
 
        if ( ! isset($this->marker[$point2]))
        {
            $this->marker[$point2] = microtime();
        }
 
        list($sm, $ss) = explode(' ', $this->marker[$point1]);
        list($em, $es) = explode(' ', $this->marker[$point2]);
 
        return number_format(($em + $es) - ($sm + $ss), $decimals);
    }
 
    // Menghitung total memori yang digunakan
    function memory_usage()
    {
        return ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 6).' MB';;
    }
}
    
?>
