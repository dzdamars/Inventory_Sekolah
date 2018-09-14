<?php include('head.php'); ?>
<?php
@SESSION_START();
$get_name = $_GET['nomor_pinjam'];?>
<body>
	<div class="container">
		<script>
	window.onload = setInterval(
    function DisplayTime(){
        if (!document.all && !document.getElementById)
            return;
        timeElement=document.getElementById? document.getElementById("mytime"): document.all.tick2;
        var CurrentDate = new Date();
        var hours = CurrentDate.getHours();
        var minutes = CurrentDate.getMinutes();
        var seconds = CurrentDate.getSeconds();
        
        if (hours<=9) hours = "0"+hours;
		if (minutes<=9) minutes = "0"+minutes;
        if (seconds<=9) seconds = "0"+seconds;
        var currentTime = hours+":"+minutes+":"+seconds;
        timeElement.style.fontWeight = 'bold';
        timeElement.style.fontFamily = 'Tahoma';
        timeElement.style.fontSize = '14px';
        timeElement.style.color = '#FFF';
        timeElement.value = currentTime;

    },1000);
	</script>
	<div class="running-text-box">
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					<div class="running-text" >
						<marquee behavior="scroll" class="running-text-content" direction="left">Pengembalian Inventaris barang Multimedia SMKN 1 Cibinong, Rapihkan dan Kembalikan alat-alat di tempat asal </marquee>
						<input name="times" type="text" id="mytime" value="" class="time" disabled />
					</div>
				</div>
			</div>
		</div>
	</div>
		<header class="clearfix">
			<h1>Pengembalian Barang<span>Inventaris barang</span></h1> <br>
		</header>
		<div class="content">
		<div class="women_main">
		<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Detail Pengembalian:</h4> <a id="return" style="float: right; margin-right:20px;" data-placement="top" class="btn btn-success" title="Click to Return" href="page.php"><i class="icon-arrow-left"></i> Back</a>
						</div>
						
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<?php
						include('config.php');
						dbcon();
						$a = mysql_query("SELECT * FROM table_pinjam
						 where nis='$get_name'") or die(mysql_error());
						$c = mysql_fetch_array($a);
						?>
									<?php
									$nama = $_SESSION['nama'];
									$jurusan = $_SESSION['jurusan'];
									 $nis = $_SESSION['nis']; ?>
								<form class="form-horizontal" method="POST" action="kembali.php?nomor_pinjam=<?php echo $nis; ?>">
										<div class="form-group">

											<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="focusedinput" name="nama" id="nama" value="<?php echo $_SESSION['nama']; ?>" disabled value=""/>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Kelas</label>
											<div class="col-sm-8"><input type="text" name="kelas" id="kelas" value="<?php echo $_SESSION['kelas']; ?>" class="form-control1" disabled value=""	></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Jurusan</label>
											<div class="col-sm-8"><input type="text" name="jurusan" id="jurusan" value="<?php echo $_SESSION['jurusan']; ?>" class="form-control1" disabled value=""	>
												</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Inventaris</label>
											<div class="col-sm-8"><input type="text" name="inventaris" id="inventaris" value="<?php echo $c['inventaris']; ?>" class="form-control1" disabled value=""	></div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Jumlah Device</label>
											<div class="col-sm-8"><input type="text" name="qty" id="qty" value="<?php echo $c['qty']; ?>" class="form-control1" disabled value=""	></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Start</label>
											<div class="col-sm-8">
												<input type="text" name="mulai" id="mulai" value="<?php echo $c['mulai']; ?>" class="form-mulai" disabled value=""	>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">End</label>
											<div class="col-sm-8">
												<input type="text" name="sampai" id="sampai" value="<?php echo $c['sampai']; ?>" class="form-mulai" disabled value=""	>
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label">	Validasi</label>
											<div class="col-sm-8">
												<input type="password" name="password" id="password" class="form-control1" required>
												<div class="box-ket">*Anda harus konfirmasi kepada pihak bengkel</div>
											</div>
										</div> 
										<button class="btn btn-info"> Kembalikan </button>
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