<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['nomor_pinjam']; ?>

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
									$query = mysql_query("select * from table_pinjam 
									LEFT JOIN device_name ON table_pinjam.nomor_pinjam=device_name.dev_id
									LEFT JOIN jurusan ON table_pinjam.nomor_pinjam=jurusan.id
									where table_pinjam.nomor_pinjam = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
		                           
								
		                            <div class="block-content collapse in">									
									<form class="form-horizontal" method="POST" action="kembali.php?nomor_pinjam=<?php echo $get_id; ?>" >	

										<div class="control-group">
                                        <label class="control-label" for="inputPassword">NAMA</label>
                                        <div class="controls">
                                        <input type="text" class="span8" value="<?php echo $row['nama']; ?>" name="dev_name" id="inputPassword" placeholder="Device Brand" readonly required>
                                        </div>
                                    </div>
										
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">KELAS</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['kelas']; ?>" name="dev_brand" id="inputPassword" placeholder="Device Brand" readonly required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">JURUSAN</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['jurusan']; ?>" name="dev_serial" id="inputPassword" placeholder="Device Serial Number"readonly required>
											</div>
										</div>
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">QTY</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['qty']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">DATE START</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['date_start']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">DATE_END</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['date_end']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >STATUS</label>
											<div class="controls">
											<select name="status"  required>										
													<option>KEMBALI</option>
												</select>												
											</div>
										</div>
									

										<?php
										if (isset($_POST['update'])){
										$status = $_POST['status'];

										mysql_query("update table_pinjam set status = '$status'
														where nomor_pinjam = '$get_id'")or die(mysql_error());
										?>

										<?php
										}
										
										
										?>

										<div class="control-group">
											<label class="control-label" for="inputPassword">KET</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_desc']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" readonly required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">VALIDASI</label>
											<div class="controls">
											<input type="password" class="span8" name="password" id="inputPassword" placeholder="Wajib Diisi! Minta Dengan Admin!" required="">
											</div>
										</div>



										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Kembalikan</button>
                                       
										</form>
										 </div>

										<div class="control-group">
										<div class="controls">
										</div>
										</div>
										
										<?php

										?>

										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script> 
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$password = $_POST['password'];



		/*................................................ admin .....................................................*/
														$query = "SELECT * FROM admin WHERE password='$password'";
														$result = mysql_query($query)or die(mysql_error());
														$row = mysql_fetch_array($result);
														$num_row = mysql_num_rows($result);
													


											if ($num_row > 0){
													$_SESSION['password']=$row['password'];
											$FG =( "update stdevice set status = 'kembali' where id = '$get_id'");
												
											$DF = mysql_query($FG);

											echo"<script>window.location.href='device_pinjam.php';</script>";
											}else{
												 			echo	"<script>alert('Username dan password salah');</script>";
															echo 	"<script>window.location.href='pengembalian.php?echo 'nama='.$get_id';</script>";	
											}
										?>
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