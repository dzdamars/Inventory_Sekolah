<?php
include('head.php');
?>
<?php
@session_start();
$t_id = $_GET['id'];
?>
<body>
	<div class="container">
		<header class="clearfix">
			<h1>Pembelian Barang<span>Habis Pakai Multimedia SMKN 1 Cibinong</span></h1> <br>
		</header>
		<div class="content">
		<div class="women_main">
		<div class="grids">
			<?php 
			@session_start();
			$nama = $_SESSION['nama'];
			$kelas = $_SESSION['kelas'];
			$jurusan = $_SESSION['jurusan'];
			?>
		<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Form Pembelian Barang:</h4>
						</div>
						<a href="stoks.php" style="float: right;margin: 20px; margin-top: -10px;" class="btn btn-info"  id="back" ><i class="fa fa-back"></i>
                                   back</a> 
						<div class="forms">
								<h3 class="title1"></h3>
								
								<div class="form-three widget-shadow">
									<?php
												include('config.php');
												dbcon();
												$a = mysql_query("SELECT * FROM  st_barang where id='$t_id'")or die(mysql_error());
												while ($b = mysql_fetch_array($a)){
												 ?>
									<form action="update_barang.php?<?php echo 'id='.$t_id ?>" class="form-horizontal" method="POST" >
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">NIS</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="dev_serial" name="dev_serial" value="<?php echo $b['dev_serial'];?>" disabled>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Kelas</label>
											<div class="col-sm-8"><select name="kelas" id="kelas" class="form-control1" disabled>
												<option name="kelas" id="kelas"><?php echo $b['kelas'];?></option>
											</select></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Jurusan</label>
											<div class="col-sm-8"><select name="jurusan" id="jurusan" class="form-control1" disabled>
												<option name="jurusan" id="jurusan"><?php echo $b['jurusan'];?></option>
												
											</select></div>
										</div>
										
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Device Location</label>
											<div class="col-sm-8"><select name="lokasi" id="lokasi" class="form-control1" disabled>
												<option name="lokasi" id="lokasi"><?php echo $b['lokasi'];?></option>
											</select></div>
										</div>										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Barang</label>
											<div class="col-sm-8"><select name="dev_model" id="dev_model" class="form-control1" disabled>
												<option id="dev_model" name="dev_model"><?php echo $b['dev_model']; ?><span class="badge"></span></option></select>
										</div>
									</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Jumlah Device</label>
											<div class="col-sm-8">
												<input id="qtyu" name="qtyu" type="text" class="form-control1" value="<?php echo $b['qtyu'];?>" disabled>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Harga</label>
											<div class="col-sm-8">
											
												<input type="text" class="form-control1" value="<?php echo $b['hasil'];?>" disabled>
										</div>
										</div>
										<div class="form-group">
											<label for="date" class="col-sm-2 control-label">Date</label>
											<div class="col-sm-8">
												<input type="text" name="st_date" id="st_date" class="form-control1" value="<?php echo $b['st_date'];?>" disabled>
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
										<button type="submit" name="simpan" class="btn">Simpan</button> 
									</form>
									<?php } ?>
								</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>