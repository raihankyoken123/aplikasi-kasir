<h2><center>INVENTARIS BARANG</center></h2>
<hr>
<a href="?p=tambah_stok" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus"></span></a>
<table class="table table-bordered">
    <head>
        <tr>
            <th>No</th>
            <th>produk_id</th>
            <th>Nama</th>
            <th>harga</th>
            <th>stok</th>
        </tr>
    </head>
     <body>
        <tr>
            <?php
            include 'page/koneksi.php';
            $kasir = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            $no = 1;
            while ($data = mysqli_fetch_array($kasir)) {
            ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['stok']; ?></td>
            <td>
                <a href="?p=edit_barang&produk_id=<?php echo $data['produk_id']; ?>" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="page/hapus_barang.php?produk_id=<?php echo $data['produk_id']; ?>" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php } ?>
    </body>
</table>
