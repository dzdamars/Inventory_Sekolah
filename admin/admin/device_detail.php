<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

<body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									<a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Add Device</a>
					                <script type="text/javascript">
		                             $(document).ready(function(){
		                             $('#add').tooltip('show');
		                             $('#add').tooltip('hide');
		                              });
		                            </script> 
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Detail Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																	</script>     
		                            </div>
		                            <br>
<br>
									<?php
									$query = mysql_query("select * from stdevice 
									LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
									where id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
		                            <div class="container-fluid">
										  <div class="row-fluid"> 
										     <div class="empty">
											     <div class="pull-right">
												   <a href="print_barcode.php?id=<?php echo $row['id']; ?>" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print Barcode</a> 		      
												   <script type="text/javascript">
												     $(document).ready(function(){
												     $('#print').tooltip('show');
												     $('#print').tooltip('hide');
												     });
												   </script>        	   
										         </div>
										      </div>
										    </div> 
										</div>

		                            <div class="block-content collapse in">									
									

										<div class="control-group">
                                        <label class="control-label" for="inputPassword">NOMOR URUT</label>
                                        <div class="controls">
                                        <input type="text" class="span8" value="<?php echo $row['nomor_urut']; ?>" name="dev_name" id="inputPassword" placeholder="Device Brand" readonly required>
                                        </div>
                                    </div>
										
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">KODE BARANG</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>" name="dev_brand" id="inputPassword" placeholder="Device Brand" readonly required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">NAMA BARANG</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_name']; ?>" name="dev_serial" id="inputPassword" placeholder="Device Serial Number"readonly required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">SPESIFIKASI</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_model']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">SUMBER ANGGARAN</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_sumber']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">TAHUN</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['tahun']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">QTY</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['qty']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">KETERANGAN</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_desc']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">KONDISI</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_status']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

                                        
                                        <div  style="background: white; padding: 20px; text-align:center" >
                                        <h3>Barcode :</h3>
                                        <br>
                                       <?php
                                       
                                                include"barcode/BarcodeGenerator.php";
                                                include "barcode/BarcodeGeneratorPNG.php";
                                                $generator = new BarcodeGeneratorPNG();
                                                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row['dev_serial'], $generator::TYPE_CODE_128)) . '"><br><p>'.$row['dev_serial'].'</p>';
                                       ?>
                                        </div>


										<div class="control-group">
										<div class="controls">
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script> 
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$dev_id = $_POST['dev_id'];
										$dev_desc = $_POST['dev_desc'];
										$dev_serial = $_POST['dev_serial'];
										$dev_brand = $_POST['dev_brand'];
										$dev_model = $_POST['dev_model'];
										$dev_status = $_POST['dev_status'];
										
										
									
										mysql_query("update stdevice set dev_id = '$dev_id' ,
																		dev_desc = '$dev_desc',
																		dev_serial  = '$dev_serial',
																		dev_brand = '$dev_brand',
																		dev_model = '$dev_model',
																		dev_status = '$dev_status'
																		where id = '$get_id' ")or die(mysql_error());
																										
									    mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
										<script>										
										window.location = "device_stocks.php";
										$.jGrowl("Device Successfully Update", { header: 'Device update' });
										</script>
										<?php
										}
										
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>