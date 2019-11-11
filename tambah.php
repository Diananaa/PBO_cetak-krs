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
<!------------------------MENU---------------------------------->
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

			<h2 align="center">Tambah Data Mahasiswa</h2>
			<br>
			<form action="tambah-proses.php" method="post">

			<div class="form-goup">
				<label for="nim">NIM </label>
				<input type="text" name="nim" required class="form-control">
			</div>
			<div class="form-goup">
			<label for="nama">Nama </label>
			<input type="text" name="nama" size="50" required class="form-control">
			</div>

			<div class="form-goup">
			<label for="jk">Jenis Kelamin </label>
				<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input"value="Perempuan" name="jenis_kelamin" required >
				<label class="custom-control-label" for="defaultGroupExample1">Perempuan</label>
				</div>

				<!-- Group of default radios - option 2 -->
				<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" value="Laki-laki" name="jenis_kelamin" required>
				<label class="custom-control-label" for="defaultGroupExample2">Laki-laki</label>
				</div>
				<div class="form-goup">
			
			</div>
			<div class="form-goup">
			<label for="angkatan">Angkatan </label>
			<select name="angkatan" class="show-tick form-control noBSselect" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>
			</div>
			<div class="form-goup">
			<label for="alamat">Alamat </label> <br>
			<textarea name="alamat" cols="30" rows="4" required></textarea>
			</div>
			<div class="form-goup">
			<label for="no_tel">Nomor Telepon </label>
			<input type="text" name="no_hp" class="form-control" required>
			</div>
			<br><br><br>
			<input type="submit" class="btn btn-primary" value="TAMBAH" name="tambah">
			<br><br><br>
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