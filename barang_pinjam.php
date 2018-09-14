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
			$nama = $_SESSION['nama'];
			$kelas = $_SESSION['kelas'];
			$jurusan = $_SESSION['jurusan'];
		?>
	<?php ?>		<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Form Peminjaman:</h4>
						</div>
						<?php 
						include('config.php');
						dbcon();
						$a = mysql_query("SELECT * FROM table_pinjam ORDER BY nomor_pinjam DESC");
						$b = mysql_fetch_array($a);
			?>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="simpan_barang.php" method="POST">
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Serial Barang</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="dev_serial" id="dev_serial" required>
											</div>
											</div>
											<div class="form-group">
											<label for="nama" class="col-sm-2 control-label">Nama</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="nama" name="nama" value="<?php echo $b['nama']; ?>" disabled>
											</div>
											<div class="col-sm-8">
												<input type="hidden" class="form-control1" id="nomor_pinjam" name="nomor_pinjam" value="<?php echo $b['nomor_pinjam']; ?>" disabled>
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