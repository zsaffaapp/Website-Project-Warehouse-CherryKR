
<div class="card shadow mb-">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary">Tambah Produk Baru</h2>
                        </div>
</div>


<div class="card-header py-3">
<form method="post" enctype="multipart/form-data" >

    <div class="form-group">
    <div class="card-header py-3">
        <label>ID Produk</label>
        <input type = "number" class="form-control" name="id">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Nama Album</label>
        <input type="text" class="form-control" name="nama">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Nama Artis</label>
        <input type = "text" class="form-control" name="artis">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Genre Musik</label>
        <input type = "text" class="form-control" name="genre">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Harga Satuan(Rp)</label>
        <input type = "number" class="form-control" name="harga">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Jumlah/Stok Persediaan</label>
        <input type = "number" class="form-control" name="stok">
        </div>
    <div class="form-group">
    <div class="card-header py-3">
        <label>Tanggal Rilis</label>
        <input type = "number" class="form-control" name="tanggal">
</div>
</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>


<?php
    
    if(isset($_POST['save']))

    {

$koneksi->query("INSERT INTO tbl_barang(id_album,nama_album,nama_artis,nama_genre,harga_satuan,jumlah_album,tahun_albun)
VALUES('$_POST[id]','$_POST[nama]','$_POST[artis]','$_POST[genre]','$_POST[harga]','$_POST[stok]','$_POST[tanggal]')");

if($koneksi->query($koneksi) === false)
{ 
trigger_error('Wrong SQL Command: ' . $koneksi . ' Error: ' . $koneksi->error, E_USER_ERROR);
  }  
  else
  { 
    echo "<script>alert('Add Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"1; url=index.php?halaman=produk\">";
}
}

?>   