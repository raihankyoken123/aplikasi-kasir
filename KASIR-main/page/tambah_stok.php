<div>
    <h2>TAMBAH STOK</h2>
    <div class="panel panel-primary">
        <div class="panel-heading">tambah stok</div>
            <div class="panel-body">
                <div class="col-lg-4"></div>
            </div>
        
    </div>
    <div class="col-lg-4 center">
        <form method="POST" action="page/tambah.php">
           
            <div class="form-group">
                <label for="">nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama produk">
            </div>
            <div class="form-group">
                <label for="">harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Masukkan harga">
            </div>
            <div class="form-group">
                <label for="">jumlah</label>
                <input type="number" class="form-control" name="jumlah" placeholder="Masukkan jumlah">
            </div>
            <div class="form-group">
                <button class="btn btn-md btn-primary">SIMPAN</button>
                <a href="?p=stok_barang" class="btn btn-md btn-default">kembali</a>
            </div>
        </form>
    </div>
</div>