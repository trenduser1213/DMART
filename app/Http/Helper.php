<?php
function format_uang($nominal){
    return number_format($nominal,2,',','.');
}

function terbilang($nominal){
    $angka = abs($nominal);
    $baca = array('','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas');
    $terbilang = '';

    if($nominal < 12) $terbilang = ''. $baca[$nominal];
    elseif($nominal < 20) $terbilang = terbilang($nominal-10).' belas ';
    elseif($nominal < 100) $terbilang = terbilang($nominal/10).' puluh '.terbilang($angka%10);
    elseif($nominal < 200) $terbilang = ' seratus '. terbilang($nominal - 100);
    elseif($nominal < 1000) $terbilang = terbilang($nominal/100).' ratus '.terbilang($nominal%100);
    elseif($nominal < 2000) $terbilang = ' seribu '. terbilang($nominal - 1000);
    elseif($nominal < 1000000) $terbilang = terbilang($nominal/1000).' ribu '.terbilang($nominal%1000);
    elseif($nominal < 1000000000) $terbilang = terbilang($nominal/1000000).' juta '.terbilang($nominal%1000000);

    return $terbilang;
}

function tgl_indo($tgl,$tampil_hari=true){
    $nama_hari = array(
        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'
    );
    $nama_bulan = array(
        1 =>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November','Desember'
    );
    
    $tahun = substr($tgl, 0,4);
    $bulan = $nama_bulan[(int) substr($tgl, 5,2)];
    $tanggal = substr($tgl, 8, 2);
    $text = '';

    if($tampil_hari){
        $urutan_hari = date('w',mktime(0,0,0,substr($tgl, 5,2),$tanggal,$tahun));
        $hari = $nama_hari[$urutan_hari];
        $text = "$hari, $tanggal $bulan $tahun";
    } else{
        $text = "$tanggal $bulan $tahun";
    }
    return $text;
}