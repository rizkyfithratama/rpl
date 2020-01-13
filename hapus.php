<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from register where id='$id'";
$hasil=mysqli_query($koneksi, $hapus);
if($hapus){
	echo "<script>alert('data berhasil dihapus');window.location.href='lihat.php';</script>";
}?>