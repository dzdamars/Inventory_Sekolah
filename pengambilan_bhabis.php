<?php
include('head.php');
?>
<style>
.btn:hover{
	
}
</style>
<body>
	<div class="container">
		<header class="clearfix">
			<h1>Pembelian Barang<span>Habis Pakai Multimedia SMKN 1 Cibinong</span></h1> <br>
		</header>
		<div class="content">
		<div class="women_main">
		<div class="grids">
		<?php
			session_start();
			$nama = $_SESSION['nama'];
			$kelas = $_SESSION['kelas'];
			$jurusan = $_SESSION['jurusan'];
			?>
		<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Form Pembelian Barang:</h4>
						</div>
						<a href="stoks.php" style="float: right;margin: 20px; margin-top: -10px;" class="btn btn-info"  id="back" ><i class="fa fa-back"></i>back</a> 
						<?php
						include('config.php');
						dbcon();
						$ab = mysql_query("SELECT * FROM habis_pakai");
						$cd = mysql_fetch_array($ab);
						$dev_name_hb = $cd['dev_name_hb']; 
						?> 
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form action="simpan_ambil.php?<?php echo 'dev_name_hb='.$dev_name_hb; ?>" class="form-horizontal" method="POST" >
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">No.urut</label>
											<div class="col-sm-8"><input typr="text" name="nomor_urut" id="nomor_urut" class="form-control1" ></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Kode Barang</label>
											<div class="col-sm-8"><input typr="text" name="dev_serial" id="dev_serial" class="form-control1" ></div>
										</div>
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">NIS</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="dev_name" name="dev_name" value="<?php echo $nama?>" placeholder="Masukkan NIS" required>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Kelas</label>
											<div class="col-sm-8"><input type="text" name="kelas" id="kelas" class="form-control1" value="<?php echo $kelas?>"
											></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Jurusan</label>
											<div class="col-sm-8"><input typr="text" name="jurusan" id="jurusan" value="<?php echo $jurusan?>" class="form-control1" ></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Device Location</label>
											<div class="col-sm-8"><select name="lokasi" id="lokasi" class="form-control1">
												<option name="lokasi" id="lokasi">Lab MM1</option>
												<option name="lokasi" id="lokasi">Lab MM2</option>
												<option name="lokasi" id="lokasi">Lab MM3</option>
												<option name="lokasi" id="lokasi">Lab MM4</option>
												<option name="lokasi" id="lokasi">Lab MM5</option>
												<option>Other..</option>
											</select></div>
										</div>										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Barang</label>
											<div class="col-sm-8"><select name="dev_id" id="dev_id" class="form-control1">
												<?php
												
												$a = mysql_query("SELECT * FROM habis_pakai");
												while($b = mysql_fetch_array($a)){
												 ?>
												<option id="dev_id" name="dev_id"><?php echo $b['dev_name_hb']; ?><span class="badge"></span></option><?php } ?></select>
												</div>
												</div>
												<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Jumlah Device</label>
											<div class="col-sm-8">
												<input id="qtyu" name="qtyu" type="text" class="form-control1" placeholder="Masukkan Jumlah">
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Harga</label>
											<div class="col-sm-8"><select name="price" id="price" class="form-control1">
												<?php
												$a = mysql_query("SELECT * FROM habis_pakai");
												while($b = mysql_fetch_array($a)){ ?>
												<option id="price" name="price"><?php echo $b['price'];?>/<span class="badge"><?php echo $b['dev_name_hb'];?></span></option><?php } ?></select>
												
										</div>
										</div>
										<div class="form-group">
											<label for="date" class="col-sm-2 control-label">Date</label>
											<div class="col-sm-8">
												<input type="date" name="st_date" id="st_date" class="form-control1">
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label">Keterangan</label>
											<div class="col-sm-8">
												<select class="form-control1" name="status" id="status">
													<option name="status" id="status">LUNAS</option>
													<option name="status" id="status">BELUM LUNAS</option>
												</select>
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label">Device Status</label>
											<div class="col-sm-8">
												<select class="form-control1" name="dev_status" id="dev_status">
													<option name="dev_status" id="dev_status">Digunakan</option>
													<option name="dev_status" id="dev_status">Baru</option>
													<option name="dev_status" id="dev_status">Rusak</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Tahun</label>
											<div class="col-sm-8"><input typr="text" name="tahun" id="tahun" class="form-control1" ></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Spesifikasi</label>
											<div class="col-sm-8"><input typr="text" name="dev_model" id="dev_model" class="form-control1" ></div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label">Sumber Anggaran</label>
											<div class="col-sm-8">
												<select class="form-control1" name="dev_sumber" id="dev_sumber">
													<option name="dev_sumber" id="dev_sumber">APBD</option>
													<option name="dev_sumber" id="dev_sumber">APBN</option>
													<option name="dev_sumber" id="dev_sumber">APBS</option>
													<option name="dev_sumber" id="dev_sumber">BANTUAN</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Deskripsi</label>
											<div class="col-sm-8"><input typr="text" name="dev_desc" id="dev_desc" class="form-control1" ></div>
										</div>
											<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Validasi</label>
											<div class="col-sm-8">
												<input type="password" name="password" id="password" class="form-control1" placeholder="validasi" required>
												<div class="box-ket">*Wajib Konfirmasi kepada pihak bengkel</div>
											</div>
										</div>
										<button type="submit" name="simpan" class="btn">ambil</button>
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