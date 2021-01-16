
<div class="card shadow mb-">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary">Update Produk</h2>
                        </div>
</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<?php
$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_album='$_GET[id];'");
$pecah= $ambil->fetch_assoc();

?>

<div class="card-header py-3">
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="card-header py-3">
        <label> Nama Album</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_album'];?>">
    </div>
    </div>
    <div class="form-group">
        <div class="card-header py-3">
        <label> Artis</label>
        <input type="text" name="artis" class="form-control" value="<?php echo $pecah['nama_artis'];?>">
    </div>
    </div>
    <div class="form-group">
        <div class="card-header py-3">  
        <label> Genre</label>
        <input type="text" name="genre" class="form-control" value="<?php echo $pecah['nama_genre'];?>">
    </div>
    </div>
    <div class="form-group">
        <div class="card-header py-3">
        <label> Harga Satuan</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_satuan'];?>">
    </div>
    </div>
    <div class="form-group">
        <div class="card-header py-3">
        <label> Stok Album</label>
        <input type="number" name="stok" class="form-control" value="<?php echo $pecah['jumlah_album'];?>">
    </div>
    </div>
    <div class="form-group">
        <div class="card-header py-3">
        <label> Tahun Rilis</label>
        <input type="number" name="tanggal" class="form-control" value="<?php echo $pecah['tahun_albun'];?>">
    </div>
    </div>

<button class="btn btn-primary" name="update">Update</button>
</form>

<?php
if (isset($_POST['update']))
{
    $koneksi->query("UPDATE tbl_barang SET nama_album='$_POST[nama]', 
    nama_artis='$_POST[artis]', nama_genre='$_POST[genre]', harga_satuan='$_POST[harga]', jumlah_album='$_POST[stok]',tahun_albun='$_POST[tanggal]'
    WHERE id_album='$_GET[id]'");
    echo "<script>alert('data berhasil diupdate')</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
