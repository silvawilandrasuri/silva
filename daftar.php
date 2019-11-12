<form action="">
	<head>
		<title></title>
		<link rel="stylesheet" href="jualan.css">
	</head>
	<body>
		<div class="header">
			<h1>SELAMAT DATANG</h1>
			<h1>Di Toko Silva</h1>
		</div>


		<div class="menu">
			<ul>
				<li><a href="daftar.php">Daftar</a></li>
				<li>Informasi</li>
				<li>Kontak</li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>

		<div class="content">
			

			<div class="bagiankiri">
	<table>
	<link rel="stylesheet" href="login.css">
		<tr>
			<td>Username</td>
			<td><input type="text" name="Username"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="Nama"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="text" name="Tanggallahir"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="Alamat"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="Email"></td>
		</tr>
		<tr>
			<td>HP</td>
			<td><input type="text" name="HP"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="Password"></td>
		</tr>
		<tr>
			<td> Jenis Kelamin</td>
			<td>
				<select name="jk">
					<option value="L">laki-laki</option>
					<option value="P">Perempuan</option>
				</select>
			</td>
		</tr>
			<td>Status</td>
			<td>
				<input type="radio" name="Status" value="Sudah">
				Sudah Menikah
				<input type="radio" name="Status" value="Belum">
				Belum Menikah
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Daftar"></td>
		</tr>
	</table>
</form>
