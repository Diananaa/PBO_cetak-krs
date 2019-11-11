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
			<div class="col-md-5 col1">
			<h3 align="center">Edit Data Mahasiswa</h3> <br>
			<?php 
			include("koneksi.php");
			$id = $_GET['id'];
			$show = mysql_query("SELECT * FROM biodata WHERE id_mahasiswa = '$id'");
			if(mysql_num_rows($show) == 0){
				echo "<script>window.history.back()</script>";
			}
			else{
				$data = mysql_fetch_assoc($show);
			} ?>

			<br>
			<form action="edit-proses.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">


			<div class="form-goup">
				<label for="nim">NIM </label>
				<input type="text" name="nim" value="<?php echo $data['nim']; ?>"required class="form-control">
			</div>
			<div class="form-goup">
			<label for="nama">Nama </label>
			<input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required class="form-control">
			</div>

			<div class="form-goup">
			<label for="jk">Jenis Kelamin </label>
				<div class="custom-control custom-radio">
				<input type="radio" <?php if($data['jenis_kelamin'] == 'Perempuan'){ echo 'checked';}?> class="custom-control-input"value="Perempuan" name="jenis_kelamin" required >
				<label class="custom-control-label" for="defaultGroupExample1">Perempuan</label>
				</div>

				<!-- Group of default radios - option 2 -->
				<div class="custom-control custom-radio">
				<input type="radio" <?php if($data['jenis_kelamin'] == 'Laki-laki'){ echo 'checked';}?> class="custom-control-input" value="Laki-laki" name="jenis_kelamin" required>
				<label class="custom-control-label" for="defaultGroupExample2">Laki-laki</label>
				</div>
				<div class="form-goup">
			
			</div>
			<div class="form-goup">
			<label for="angkatan">Angkatan </label>
			<select name="angkatan" class="show-tick form-control noBSselect" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2011" <?php if($data['angkatan'] == '2011'){ echo 'selected';}?>>2011</option>
						<option value="2012"<?php if($data['angkatan'] == '2012'){ echo 'selected';}?>>2012</option>
						<option value="2013" <?php if($data['angkatan'] == '2013'){ echo 'selected';}?>>2013</option>
						<option value="2014" <?php if($data['angkatan'] == '2014'){ echo 'selected';}?>>2014</option>
						<option value="2015"<?php if($data['angkatan'] == '2015'){ echo 'selected';}?>>2015</option>
						<option value="2016"<?php if($data['angkatan'] == '2016'){ echo 'selected';}?>>2016</option>
						<option value="2017" <?php if($data['angkatan'] == '2017'){ echo 'selected';}?>>2017</option>
						<option value="2018" <?php if($data['angkatan'] == '2018'){ echo 'selected';}?>>2018</option>
						<option value="2019" <?php if($data['angkatan'] == '2019'){ echo 'selected';}?>>2019</option>
					</select>
			</div>
			<div class="form-goup">
			<label for="alamat">Alamat </label> <br>
			<textarea name="alamat" cols="30" rows="4" required><?php echo $data['alamat']; ?></textarea>
			</div>
			<div class="form-goup">
			<label for="no_tel">Nomor Telepon </label>
			<input type="text" name="no_hp" class="form-control"value="<?php echo $data['no_hp']; ?>"  required>
			</div>
			<br><br><br>
			<input type="submit" class="btn btn-primary" value="TAMBAH" name="tambah">
			<br><br><br>
	</form>
			</div>
		</div>
		
</div>




<div class="container" id="body">	
		<div class="row" > 
			<div class="col-md-12 col1">
			
	<h3 align="center">Edit Data Mahasiswa</h3> <br>
	<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM biodata WHERE id_mahasiswa = '$id'");
	if(mysql_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nim']; ?>" name="nim" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required <?php if($data['jenis_kelamin'] == 'L'){ echo 'checked';}?>> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'checked';}?>> Perempuan
				</td>
			</tr>
			<tr>
				<td>ANGKATAN</td>
				<td>:</td>
				<td>
					<select name="angkatan" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2011" <?php if($data['angkatan'] == '2011'){ echo 'selected';}?>>2011</option>
						<option value="2012" <?php if($data['angkatan'] == '2012'){ echo 'selected';}?>>2012</option>
						<option value="2013" <?php if($data['angkatan'] == '2013'){ echo 'selected';}?>>2013</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required><?php echo $data['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['no_hp']; ?>" name="no_hp" required>
				</td>
			</tr>
			<tr> 
				<td colspan="2"></td>
				<td><br><br><br>
					<input type="submit" class="btn btn-primary" name="simpan">
				</td>
			</tr>
		</table>
	</form>
<br><br><br>
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