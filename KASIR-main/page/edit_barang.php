<div>
    <h2>TAMBAH STOK</h2>
    <?php
    include 'page/koneksi.php';
    $produk_id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from produk_id where id ='$produk_id'");
    while ($d = mysqli_fetch_array($data)){
    ?>
    <div class="col-lg-4 center">
        <form action="">
            <div class="form-group">
                <label for="">produk_id</label>
                <input type="text" class="form-control" placeholder="Masukkan id produk">
            </div>
            <div class="form-group">
                <label for="">nama produk</label>
                <input type="text" class="form-control" placeholder="Masukkan nama produk">
            </div>
            <div class="form-group">
                <label for="">harga</label>
                <input type="text" class="form-control" placeholder="Masukkan harga">
            </div>
            <div class="form-group">
                <label for="">jumlah</label>
                <input type="number" class="form-control" placeholder="Masukkan jumlah">
            </div>
            <div class="form-group">
                <button class="btn btn-md btn-primary">SIMPAN</button>
                <a href="?p=stok_barang" class="btn btn-md btn-default">kembali</a>
            </div>
        </form>
        <?php
    }
    ?>
    </div>
</div>