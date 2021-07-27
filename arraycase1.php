<?php

$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];

// buat nota untuk menghitung total jumlah yang akan dibeli

// Menentukan barang yang akan dibeli
    $barang = $product[4]["name"];
    echo "Nama Barang : $barang , ";

// menentukan jumlah
    $jumlah = $product[4]["qty"];
echo "Jumlah  : $jumlah , ";

// memasukkan harga per barang
        $harga = $product[4]["price"];
        
echo "Harga : $harga , ";

// Menentukan total yang harus dibayar
    $total = $jumlah*$harga;
    echo "Total Harga adalah : Rp $total"

?>