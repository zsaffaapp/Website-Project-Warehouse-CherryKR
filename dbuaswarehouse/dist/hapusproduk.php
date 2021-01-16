<?php
$ambil= $koneksi->query("SELECT * FROM tbl_barang WHERE id_album='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tbl_barang WHERE id_album='$_GET[id]'");

echo "<script>alert('data berhasil dihapus')</script>";
echo "<script>location='index.php?halaman=produk';</script>";
?>