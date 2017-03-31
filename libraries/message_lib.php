<?php

function error_msg($errors)
{
    $err_msg ='';
    if ( ! empty ($errors))
    {
        $err_msg ='<div class="msg n_error">';
        foreach ($errors as $error) $err_msg .='<p>'.$error.'</p>';           
        $err_msg .='</div>';  
    }
    return $err_msg;    
}


function page_err_msg($err_number)
{

    switch ($err_number)
    {
        default:
            $err_msg='Terjadi Kesalahan Dalam Proses.';
        break;
        case 1:
            $err_msg='Data Tidak Ditemukan.';
        break;
        case 2:
            $err_msg='Id Tidak Boleh Kosong Dan Harus Angka.';
        break;
    }

    return '<div class="full_w">
            <div class="h_title">Error Message</div>
            <div class="n_error"><p>'.$err_msg.'</p></div>  
            </div>';
}

function qry_result_msg($result)
{
    switch ($result)
    {
        case 'input':
            return '<div class="msg n_ok"><p>Input Data Berhasil</p></div>';
        break;
        case 'edit':
            return '<div class="msg n_ok"><p>Update Data Berhasil</p></div>';
        break;
        case 'del':
            return '<div class="msg n_ok"><p>Data Berhasil Dihapus</p></div>';
        break;
        case 'publish':
            return '<div class="msg n_ok"><p>Publish Data Berhasil</p></div>';
        break;
        case 'unpublish':
            return '<div class="msg n_ok"><p>Unpublish Data Berhasil</p></div>';
        break;
        case 'replay':
            return '<div class="msg n_ok"><p>Pesan Berhasil Dikirim</p></div>';
        break;
        case 'failed':
            return '<div class="msg n_error"><p>Proses Gagal, Silahkan Ulangi Lagi!</p></div>';
        break;
    }   
}

?>