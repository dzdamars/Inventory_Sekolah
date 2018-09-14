<?php
include('head.php');
?>
<body>
	<div class="container">
		<header class="clearfix">
			<h1>Pengambilan Barang<span>Habis Pakai</span></h1> <br>
		</header>
		<div class="content">
		<div class="women_main">
		<div class="grids">
		<div class="panel panel-widget forms-panel">
		<h4>Pembelian Barang Pakai:</h4> <style type="text/css">
		.bs-example{
		margin: 20px;}
	</style>
	<a id="return" style="float: right;" data-placement="top" class="btn btn-success" title="Click to Return" href="page.php"><i class="icon-arrow-left"></i> Back</a>
	<div class="bs-example">
    <ul class="nav nav-pills">
    <?php
    include('config.php');
dbcon(); 
?>
<?php
$result = mysql_query("SELECT * FROM habis_pakai");
while ($count = mysql_fetch_array($result)){
?>
    <li><a href=""><?php echo $count['dev_name_hb']; ?><span class="badge"><?php echo $count['qty']; ?></span></a></li>
    <?php } ?>
    </ul>
</div>
<?php
$a = mysql_query("SELECT * from st_barang");
$b = mysql_fetch_array($a);
$id_item = $b['id'];
?>
</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow" style="margin-top: -30px;">
								<a href="peminjaman_bhabis.php" class="btn btn-info"  id="add" >
                                   +Input Pembelian Barang</a>
                                <a href="pengambilan_bhabis.php" class="btn btn-info"  id="add" >
                                   -Input Pengambilan Barang</a>
                                   <a href="print_all.php?<?php echo 'id_item='.$id_item ?>" style="float: right;" class="btn btn-info"  id="back" ><i class="fa fa-back"></i>
                                   Print</a>  
									<form action="simpan_proses.php" class="form-horizontal" method="POST" >
									<div class="container-fluid">
										<?php
										include('datatable.php');
										?>
									</form>
									<p><i>*Jika anda belum melunasi pembayaran, dan ingin melunasi silahkan klik</i> <b>Lunasi</b></p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>  
</html>
