<?php
include"koneksi.php";
if(isset($_POST['id'])){
	$edit="update register set namadep='$_POST[namadep]', namabel='$_POST[namabel]', username='$_POST[username]', password='$_POST[password]', usia='$_POST[usia]', jk='$_POST[jk]', ttl='$_POST[ttl]', email='$_POST[email]', notel='$_POST[notel]' where id='$_POST[id]'";
	$hasil=mysqli_query($koneksi, $edit);
	if($hasil){
		echo"<script>alert('data berhasil diedit'); window.location.href='lihat.php';</script>";
	}
}
?>