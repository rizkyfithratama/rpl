<style type="text/css">
	<!--
	.style1 {
		color: #000099;
		font-weight: bold;
	}
	-->
</style>

<body>
	<div align="center">
	<h2>Register</h2><br />
	cari member
	<form action="cari.php" method="get">
		<input type="text" name="username" placeholder="ketikan username" />
		<input type="submit" value="cari" />
	</form>
	</div>
</body>

<form action="register.php" method="post">
	<p>&nbsp;</p>
	<!-- <div align="center" class="style1"> -->
		<!-- <p>REGISTER</p> -->
	<!-- </div> -->
	<table width="496" border="0" align="center">
		<tr>
			<td width="163">Nama Depan:</td>
			<td width="317"><input type="text" name="namadep" /></td>
		</tr>
		<tr>
			<td>Nama Belakang :</td>
			<td><input type="text" name="namabel" /></td>
		</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td>Usia :</td>
			<td><input type="text" name="usia" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin :</td>
			<td><input type="text" name="jk" /></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir :</td>
			<td><input type="text" name="ttl" /></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>Nomor Telepon :</td>
			<td><input type="text" name="notel" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="input"/></td>
		</tr>
	</table>
</form>
<a href="lihat.php">lihat daftar member ----></a>