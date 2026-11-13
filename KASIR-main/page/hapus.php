<?php

include 'page/koneksi.php';

 $produk_id = $_GET['id'];
 mysqli_query($koneksi,"delete from produk where id='$produk_id'");
 header("location:stok_barang.php");
?>