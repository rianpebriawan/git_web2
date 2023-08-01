<?php
function kenalkan($nama) {
    echo "Kenalkan nama saya: $nama";
}

// Panggil function kenalkan
kenalkan("abduh <br>");

// Contoh function menggunakan return
function buat_nama_kapital($nama) {
    return ucwords($nama);
}
$nama_lengkap = buat_nama_kapital("muhammad abduh");
echo $nama_lengkap; // Muhammad Abduh

// Memanggil function di dalam function lain
function perkenalkan($nama, $asal) {
    echo "<br>Perkenalkan nama saya " . buat_nama_kapital($nama) . ", asal saya dari $asal";
}
perkenalkan("muhammad abduh", "bandung");
?>