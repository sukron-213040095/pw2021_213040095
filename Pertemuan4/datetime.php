<?php

/*
    Pertemuan 4
    Fungsi di PHP
*/

/*
    date 
    untuk menampilkan tanggal dan waktu tertentu
*/
echo date('l, d M Y');

/*
    time 
    timestanp atau epoc
    angka yang dihasilkan tersebut merupakan jumlah detik yang dihasilkan sejak 1 Januari 1970
*/
echo "</br>";
echo "</br>";
echo time();

echo "</br>";
echo "</br>";
/*
    Menghitung selisih hari
    echo date("l", time() + 60 * 60 * 24 * 2);    
    penjelasan kode diatas adalah l merupakan kode hari dari format date, sedangkan time adalah time stanp (jumlah detik yang terkumpul
    hingga hari ini) ditambah  60 detik  x 60 menit x 24 jam x 2 hari merupakan jumlah detik selama 2 hari.
    hasilnya dia akan mencetak nama hari 2 hari kemudian setelah hari ini
*/
echo date("l", time() + 60 * 60 * 24 * 2);

echo "</br>";
echo "</br>";
/*
    mktime(0,0,0,0,0,0)
    jam, menit, detik, bulan, tanggal, tahun
*/
echo mktime(0, 0, 0, 6, 15, 1991);
echo "</br>";
echo date('l', mktime(0, 0, 0, 6, 15, 1991));

echo "</br>";
echo "</br>";
/*
    strtotime("15 Jun 1991")
*/
echo strtotime("15Jun 1991");
echo "</br>";
echo date('l', strtotime("15 Jun 1991"));
