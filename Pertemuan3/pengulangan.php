<?php

// Ini pertemuan 3
/*
    Pengulangan 
    for
    while
    do .. while
    foreach 
*/

// Contoh Menggunakan pengulangan for
for ($i = 0; $i < 5; $i++) {
    echo "<div>Hello World menggunakan for</div>";
}

// Contoh jika menggunakan pengulangan while
$i = 0;
while ($i < 5) {
    echo "<div>Hello World menggunakan while</div>";
    $i++;
}

// Contoh jika menggunakan pengulangan do .. while
$i = 0;
do {
    echo "<div>Hello World menggunakan do .. while</div>";
    $i++;
} while ($i < 5);

/* 
    Contoh jika menggunakan pengulangan foreach
    foreach digunakan untuk pengulangan array
*/

$semuabuah = ['Apel', 'Strawberry', 'Anggur'];

foreach ($semuabuah as $buah) {
    echo "<div>$buah</div>";
}
