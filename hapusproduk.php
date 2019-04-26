<?php 
	$ambil=$koneksi->query("SELECT * FROM produk where id_produk='$_GET[id]'");
	$pecah= $ambil->fetch_assoc();
	$fotoproduk=$pecah['foto_produk'];
	if (file_exists("/fotoproduk/$fotoproduk"))
	{
		unlink("/fotoproduk/$fotoproduk");
	}

	$koneksi->query("DELETE  FROM produk where id_produk='$_GET[id]'");

	echo "<script>alert('Produk terhapus');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
?>
 