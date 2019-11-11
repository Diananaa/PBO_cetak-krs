<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

<!------------------------------ header----------------------->
<div class="container">	
		<div class="row" align="center" id="header"> 
		<div class="col-md-2 col1">		
		</div>
			<div class="col-md-3 col1">
				<img src="logo1.png" width="100">
			</div>
			<div class="col-md-5 col1">
			<h5><b>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</b></h5>
				<h5><b>UNIVERSITAS PALANGKA RAYA</b></h5>
				<h4><b>FAKULTAS TEKNIK</b></h4>
			</div>
			<div class="col-md-1 col1">		
		</div>
		</div>
</div>
  <!-------------------------- menu-------------------->
<div class="container">	
		<div class="row" id="menu"> 
		<ul class="nav ">
			<li class="active">
				<a href="home.php">Home</a>
				<a href="tambah.php">Tambah</a>
				<a href="index.php">Edit</a>
				<a href="#">Tentang</a>
			</li>
		</ul>
		</div>
</div>

<!------------------------BODY---------------------------------->
<div class="container" id="body">	
		<div class="row" > 
			<div class="col-md-12 col1">

			<h3 align="center">Data Mahasiswa</h3><br>

	<table class="table" cellpadding="5" cellspacing="0" >
		<thead>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Angkatan</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>Aksi</th>
		</thead>
		<?php
		include("koneksi.php");
		$query = mysql_query("SELECT * FROM biodata ORDER BY id_mahasiswa DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){ ?>
			<tr><td colspan="8">Tidak ada data</td></tr>
		<?php }
		else{ 
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['nim'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['jenis_kelamin'] ?></td>
				<td><?php echo $data['angkatan'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['no_hp'] ?></td>
				<td>
				<table class="table" cellpadding="5" cellspacing="0">
					<tbody>
						<td><a href="edit.php?id=<?php echo $data['id_mahasiswa'] ?>">Edit</a> </td>
						<td><a href="hapus.php?id=<?php echo $data['id_mahasiswa'] ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Hapus</a></td>
					</tbody>
				</table>
				
				
				</td>
			</tr>
		<?php 
		$no++;
	} 
}
		?>
	</table>

</form>

			</div>
		</div>
</div>
</body>
<!------------------------FOOTER---------------------------------->
<div class="container" id ="footer">	
		<div class="row" > 
			<div class="col-md-1 col1">
			</div>
			<div class="col-md-3 col1" align="right">
			<img src="logo1.png" width="100">
			</div>
			<div class="col-md-6 col1">
			<h4>PEMPROGRAMAN BERBASIS OBJEK</h4>
			<h4>TEKNIK INFORMATIKA</h4>
			</div>
		</div>
</div>

</html>