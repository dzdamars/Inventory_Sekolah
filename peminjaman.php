<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman Barang</title>
</head>
<?php include 'head.php'; ?>
<body>
	<div class="container">
		<header class="clearfix">
			<h1>Peminjaman Barang<span>Inventaris barang</span></h1> <br>
		</header>
		<div class="content">
		<div class="women_main">
		<div class="grids">
		<?php
			session_start();
			$nis = $_SESSION['nis'];
			$nama = $_SESSION['nama'];
			$kelas = $_SESSION['kelas'];
			$jurusan = $_SESSION['jurusan'];
		?>
		<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Form Peminjaman:</h4>
						</div>
						<a id="return" style="float: right; margin-right:20px;" data-placement="top" class="btn btn-info" title="Click to Return" href="page.php"><i class="icon-arrow-left"></i> Back</a> 
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form action="simpan_proses.php" class="form-horizontal" method="POST" >
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="nama" name="nama" value="<?php echo $nama?>" placeholder="Masukkan Nama Lengkap" disabled required>
											</div>
										</div>
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Kelas</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="kelas" name="kelas" value="<?php echo $kelas?>"  disabled required>
											</div>
										</div> 
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Jurusan</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="jurusan" name="jurusan" value="<?php echo $jurusan?>" disabled required>
											</div>
										</div> 
										<!-- <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Inventaris</label>
											<div class="col-sm-8"><select name="inventaris" id="inventaris" class="form-control1" required="">
												<option name="inventaris" id="inventaris">POWER CORD</option>
												<option name="inventaris" id="inventaris">MOUSE</option>
												<option name="inventaris" id="inventaris">MONITOR</option>
												<option name="inventaris" id="inventaris">VGA</option>
												<option name="inventaris" id="inventaris">KEYBOARD</option>
												<option name="inventaris" id="inventaris">CPU</option>
												<option name="inventaris" id="inventaris">PRINTER</option>
												<option name="inventaris" id="inventaris">SPEAKER</option>
												<option name="inventaris" id="inventaris">AVR</option>
											</select></div>
										</div> -->
										<!-- <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Kelas</label>
											<div class="col-sm-8"><select name="kelas" id="kelas" class="form-control1" required="">
												<option name="kelas" id="kelas">10</option>
												<option name="kelas" id="kelas">11</option>
												<option name="kelas" id="kelas">12</option>
												<option>Other..</option>
											</select></div>
										</div> -->
										<!-- <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Jurusan</label>
											<div class="col-sm-8"><select name="jurusan" id="jurusan" class="form-control1" required="">
												<option name="jurusan" id="jurusan">Multimedia.</option>
												<option name="jurusan" id="jurusan">Teknik Komputer Jaringan</option>
												<option name="jurusan" id="jurusan">Rekayasa Perangkat Lunak.</option>
												<option name="jurusan" id="jurusan">Sistem Informasi Jaringan Aplikasi.</option>
											</select></div>
										</div> -->
										
										<!-- <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Device Location</label>
											<div class="col-sm-8"><select name="lokasi" id="lokasi" class="form-control1">
												<option name="lokasi" id="lokasi">Lab MM1</option>
												<option name="lokasi" id="lokasi">Lab MM2</option>
												<option name="lokasi" id="lokasi">Lab MM3</option>
												<option name="lokasi" id="lokasi">Lab MM4</option>
												<option name="lokasi" id="lokasi">Lab MM5</option>
												<option>Other..</option>
											</select></div>
										</div> -->
<!-- 										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Inventaris</label>
											<div class="col-sm-8"><select name="inventaris" id="inventaris" class="form-control1">
												<option name="inventaris" id="inventaris">Keyboard</option>
												<option name="inventaris" id="inventaris">Mouse</option>
												<option name="inventaris" id="inventaris">CPU</option>
												<option name="inventaris" id="inventaris">VGA</option>
												<option name="inventaris" id="inventaris">Monitor</option>
												<option name="inventaris" id="inventaris">Other..</option>
											</select></div>
										</div> -->
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Quantity</label>
											<div class="col-sm-8"><input id="qty" name="qty" type="text" class="form-control1" placeholder="Masukkan Jumlah" required></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Mulai</label>
											<div class="col-sm-8">
												<select name="mulai" id="mulai" class="form-mulai">
													<option name="mulai" id="mulai">07.00</option>
													<option name="mulai" id="mulai">08.00</option>
													<option name="mulai" id="mulai">09.00</option>
													<option name="mulai" id="mulai">10.00</option>
													<option name="mulai" id="mulai">11.00</option>
													<option name="mulai" id="mulai">12.45</option>
													<option name="mulai" id="mulai">13.30</option>
													<option name="mulai" id="mulai">14.30</option>
													<option name="mulai" id="mulai">15.30</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Sampai</label>
											<div class="col-sm-8">
												<select name="sampai" id="sampai" class="form-mulai">
													<option name="sampai" id="sampai">07.00</option>
													<option name="sampai" id="sampai">08.00</option>
													<option name="sampai" id="sampai">09.00</option>
													<option name="sampai" id="sampai">10.00</option>
													<option name="sampai" id="sampai">11.00</option>
													<option name="sampai" id="sampai">12.45</option>
													<option name="sampai" id="sampai">14.00</option>
													<option name="sampai" id="sampai">15.30</option>
													<option name="sampai" id="sampai">16.45</option>
													</option>
												</select>
											</div>
										</div>
										<!-- <div class="form-group">
											<label for="import" class="col-sm-2 control-label">Import</label>
											<div class="col-sm-8">
												<input type="file" name="import" id="import" class="form-control1">
											</div>
										</div> -->
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Device Status</label>
											<div class="col-sm-8"><select name="dev_status" id="keterangan" class="form-control1" required="">
												<option name="dev_status" id="dev_status">Digunakan</option>
												<option name="dev_status" id="dev_status">Baru</option>
												<option name="dev_status" id="dev_status">Rusak</option>
											</select></div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Keterangan</label>
											<div class="col-sm-8"><input id="dev_desc" name="dev_desc" type="text" class="form-control1" required></div>
										</div>

										<div hidden class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >STATUS</label>
											<div class="controls">
											<select name="status" id="status" required>										
													<option name="status" id="status">PINJAM</option>																						
												</select>								
											</div>
										</div>
										
										<button type="submit" name="simpan" class="btn">Simpan</button> 
									</form>
									
								</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>