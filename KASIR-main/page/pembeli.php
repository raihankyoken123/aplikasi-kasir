<h2><center>PELANGGAN</center></h2>
<hr>
<a href="?p=tambah_pelanggan" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus"></span></a>
<table class="table table-bordered">
    <head>
        <tr>
            <th>No</th>
            <th>id_pelanggan</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>no_telepon</th>
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
            <td><?php echo $data['id_pelanggan']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_telepon']; ?></td>
        </tr>
        <?php } ?>
    </body>
</table>
