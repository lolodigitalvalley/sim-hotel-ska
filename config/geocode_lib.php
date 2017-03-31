<?php

function carintd($lat1, $lng1, $ntx)
{
    $radlat1 = deg2rad($lat1);
    $radlng1 = deg2rad($lng1);

    //$data_term = $this->m_terminal->data_tabel();
    $query = mysql_query('SELECT * FROM hotel') or die(mysql_error());

    while ($row = mysql_fetch_object($query)) {
        $ind  = $row->id_hotel;
        $lat2 = $row->latitude;
        $lng2 = $row->longitude;
        $nt   = $row->nama_hotel;
        $ns   = $row->nama_seo;

        $radlat2  = deg2rad((float) $lat2);
        $radlng2  = deg2rad((float) $lng2);
        $radlng21 = deg2rad((float) $lng2 - (float) $lng1);

        $dr = cos($radlat1) * cos($radlat2) * cos($radlng21);
        $dr = $dr + (sin($radlat1) * sin($radlat2));
        $dr = acos($dr) * 6371;

        if ($ind == 1 or $dr < $drm and $nt != $ntx) {
            $id   = $ind;
            $nsd  = $ns;
            $drm  = $dr;
            $ntd  = $nt;
            $latd = $lat2;
            $lngd = $lng2;

        }

    }
    return array($latd, $lngd, $drm, $id, $nsd, $ntd);
}

function geocode($address)
{
    $lat               = 0;
    $lng               = 0;
    $formatted_address = '';

    $addr       = urlencode($address);
    $geocodeURL = "http://maps.googleapis.com/maps/api/geocode/json?address=$addr&sensor=false";

    $ch = curl_init($geocodeURL); //inisialisasi fungsi curl
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //
    $result   = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        $geocode    = json_decode($result);
        $geo_status = $geocode->status;
    } else {
        $geo_status = "HTTP_FAIL_$httpCode";
    }

    if ($geo_status == "OK") {
        $lat               = $geocode->results[0]->geometry->location->lat;
        $lng               = $geocode->results[0]->geometry->location->lng;
        $formatted_address = $geocode->results[0]->formatted_address;
    }
    return array($lat, $lng, $formatted_address, $geo_status);
}
