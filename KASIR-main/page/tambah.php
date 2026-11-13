<?php

include 'page/koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "INSERT INTO produk(produk_id, nama, harga, stok)
VALUES
('$nama', '$harga', '$stok')");

header("location:page/stok_barang.php");
?>