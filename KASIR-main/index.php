<?php
session_start();
include("page/koneksi.php");  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../../favicon.ico">
    <title>APlikasi kasir</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">aplikasi kasir</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">beranda</a></li>
            <li><a href="?p=stok_barang">data produk</a></li>
            <li><a href="?p=penjualan">penjualan</a></li>
            <li><a href="?p=pembeli">pembeli</a></li>
            <li><a href="#contact">registrasi</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <?php
    @$p = $_GET['p'];
    switch ($p){
        case 'login':
            include "page/login.php";
            break;
        case 'stok_barang':
            include "page/stok_barang.php";
            break;
         case 'tambah_stok':
            include "page/tambah_stok.php";
            break;
        case 'edit_barang':
            include "page/edit_barang.php";
            break;
        case 'hapus_barang':
            include "page/hapus.php";
            break;
          case 'penjualan':
            include "page/penjualan.php";
            break;
            case 'pembeli':
            include "page/pembeli.php";
            break;

        default:
        include "page/login.php";
        break;
    }
    ?>
    </div>
     

    </div> 

  </body>
</html>
