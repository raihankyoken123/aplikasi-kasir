<?php

include 'page/koneksi.php';

$produk_id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', harga='$harga', stok='$stok' where id='$produk_id'");

header("location:page/stok_barang.php");
?>