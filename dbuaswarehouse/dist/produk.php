
<div class="card shadow mb-">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary">Tabel Data Produk</h2>
                        </div>
</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
        <tr>
            <th>Nomor</th>
            <th>ID Album</th>
            <th>Nama Album</th>
            <th>Artis</th>
            <th>Genre</th>
            <th>Harga Satuan</th>
            <th>Jumlah</th>
            <th>Tanggal Rilis</th>
            <th>Aksi</th>
        </tr> 
                                    <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM tbl_barang"); ?>
    <?php while($pecah=$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['id_album']; ?></td>
            <td><?php echo $pecah['nama_album']; ?></td>
            <td><?php echo $pecah['nama_artis']; ?></td>
            <td><?php echo $pecah['nama_genre']; ?></td>
            <td><?php echo $pecah['harga_satuan']; ?></td>
            <td><?php echo $pecah['jumlah_album']; ?></td>
            <td><?php echo $pecah['tahun_albun']; ?></td>
            <td> 
            <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_album'];?>"class="btn-danger btn">Hapus</a>
            <a href="index.php?halaman=updateproduk&id=<?php echo $pecah['id_album'];?>"class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>

        <div class="panel-body ">
    <p>
        <a class="btn btn-success" href="index.php?halaman=tambahproduk">Tambah Produk Baru</a>    </p>
</form>
                        </div>
</div>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    

                    



