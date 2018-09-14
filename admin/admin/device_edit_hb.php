<link href="bootstrap/css/textarea2.css" rel="stylesheet" media="screen">

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
		                                <div class="muted pull-left">Edit Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>     
		                            </div>
		                            <div class="block-content collapse in">									
									
									<?php
									$query = mysql_query("select * from st_barang
									LEFT JOIN habis_pakai ON st_barang.dev_id=habis_pakai.dev_id
									where id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">NOMOR URUT</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['nomor_urut']; ?>" name="nomor_urut" id="inputPassword" placeholder="Device Brand" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">KODE BARANG</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputEmail">NAMA BARANG</label>
											<div class="controls">			
												<select id="qtype" name="dev_id" required>

													<option value="<?php echo $row['dev_id']; ?>" ><?php echo $row['dev_name_hb']; ?></option>
													<?php
													$device_query = mysql_query("select * from habis_pakai")or die(mysql_error());
													while($query_device_row = mysql_fetch_array($device_query)){
													$dev_name = $row['dev_name_hb'];
													?>
													<option value="<?php echo $query_device_row['dev_id']; ?>"><?php echo $query_device_row['dev_name_hb'];  ?></option>
													<?php } ?>

												</select>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">SPESIFIKASI</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['dev_model']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >SUMBER ANGGARAN</label>
											<div class="controls">
											<select name="dev_sumber"  required>										
													<option>APBN</option>
													<option>APBD</option>
													<option>APBS</option>																									
												</select>												
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">TAHUN</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['tahun']; ?>" name="tahun" id="inputPassword" placeholder="Device Model" required>
											</div>
										</div>
										

										<div class="control-group">
											<label class="control-label" for="inputPassword">QTY</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['qty']; ?>" name="qty" id="inputPassword" placeholder="Device Model" required>
											</div>
										</div>
										
										

										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >KONDISI</label>
											<div class="controls">
											<select name="dev_status"  required>										
													<option>Used</option>
													<option>New</option>
													<option>Damage</option>																									
												</select>												
											</div>
										</div>
									   										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
												<textarea class="textarea2" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Isi Deskripsi dibawah ini" name="dev_desc" id="textarea" rows="8" cols="30" maxlength="50" >
													<?php echo $row['dev_desc']; ?>
												</textarea>
												<div id="textarea_feedback"></div>
											</div>
										</div>
										
										<script language=JavaScript>
											$(document).ready(function() {
										    var text_max = 50;
										    $('#textarea_feedback').html(text_max + ' characters remaining');

										    $('#textarea').keyup(function() {
										        var text_length = $('#textarea').val().length;
										        var text_remaining = text_max - text_length;

										        $('#textarea_feedback').html(text_remaining + ' characters remaining');
										    });
										});
										</script>

										<div class="control-group">
										<div class="controls">
										
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
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
										$nomor_urut = $_POST['nomor_urut'];
										$dev_serial = $_POST['dev_serial'];
										$dev_model = $_POST['dev_model'];
										$tahun = $_POST['tahun'];
										$qty = $_POST['qty'];
										$dev_status = $_POST['dev_status'];
										$dev_desc = $_POST['dev_desc'];
										$dev_sumber = $_POST['dev_sumber'];
									
										mysql_query("update st_barang set dev_id = '$dev_id' ,
																		nomor_urut = '$nomor_urut',
																		dev_serial  = '$dev_serial',	
																		dev_model = '$dev_model',
																		tahun = '$tahun',
																		qty = '$qty',
																		dev_status = '$dev_status',
																		dev_desc = '$dev_desc',
																		dev_sumber = '$dev_sumber'
																		where id = '$get_id' ")or die(mysql_error());
																										
									    mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')")or die(mysql_error());
										?>
										<script>										
										window.location = "device_habispakai.php";
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

</html>