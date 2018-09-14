<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>                          
		                            </div>
									

		                            <?php 
						$a = mysql_query("SELECT * FROM table_pinjam ORDER BY nomor_pinjam DESC");
						$b = mysql_fetch_array($a);
						
						?>
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post" action="simpan_barang.php">											
							
											
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">SERIAL BARANG</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_serial" id="dev_serial" placeholder="SERIAL BARANG" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">NAMA</label>
											<div class="controls">
											<input type="text" class="span8" id="nama" name="nama" value="<?php echo $b['nama']; ?>" disabled>
											</div>
										</div>

											<div class="col-sm-8">
												<input type="hidden" class="form-control1" id="id" name="nomor_pinjam" value="<?php echo $b['nomor_pinjam']; ?>" disabled>
											</div>
										
											
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
							</form>
																										
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>