<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Untitled Document</title>
</head>

<body>
<h2>Daftar Member</h2><br />
<?php
include"koneksi.php";
$select="select * from register";
$hasil= mysqli_query($koneksi, $select);
?>
<table width="1200" border="1">
	<tr>
		<td width="31">id</td>
		<td width="85">nama depan</td>
		<td width="99">nama belakang</td>
		<td width="82">username</td>
		<td width="87">password</td>
		<td width="41">usia</td>
		<td width="41">jk</td>
		<td width="128">ttl</td>
		<td width="182">email</td>
		<td width="152">notel</td>
		<td colspan="2">aksi</td>
	</tr>
	</table>
<?php
while($buff=mysqli_fetch_array($hasil)){
?>
<table width="1200" border="1"> 
	<tr>
		<td width="31"><?php echo $buff['id'];?></td>
		<td width="85"><?php echo $buff['namadep'];?></td>
		<td width="99"><?php echo $buff['namabel'];?></td>
		<td width="82"><?php echo $buff['username'];?></td>
		<td width="87"><?php echo $buff['password'];?></td>
		<td width="41"><?php echo $buff['usia'];?></td>
		<td width="41"><?php echo $buff['jk'];?></td>
		<td width="128"><?php echo $buff['ttl'];?></td>
		<td width="182"><?php echo $buff['email'];?></td>
		<td width="152"><?php echo $buff['notel'];?></td>
		<td width="100"><a href="edit.php?id=<?php echo $buff['id'];?>">edit</a></td>
		<td width="96"><a href="hapus.php?id=<?php echo $buff['id'];?>">hapus</a></td>
	</tr>
</table>
<?php
};
mysqli_close($koneksi);
?><br />
<a href="index.php"><---- kembali ke index </a>
</body>
</html>