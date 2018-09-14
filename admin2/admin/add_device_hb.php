<link href="bootstrap/css/textarea2.css" rel="stylesheet" media="screen">

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
									
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">											
								
										<div class="control-group">
											<label class="control-label" for="inputPassword">No.Urut</label>
											<div class="controls">
											<input type="text" class="span8" name="nomor_urut" id="inputPassword" placeholder="Nomor Urut" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">Kode Barang</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_serial" id="inputPassword" placeholder="Kode barang" required>
											</div>
										</div>

									<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Nama Barang</label>
			                                <div class="controls">
				                              <select name="dev_id" class="chzn-select"  required/>
				                                 <option></option>
			                                     <?php $device_name=mysql_query("select * from habis_pakai")or die(mysql_error()); 
			                                     while ($row=mysql_fetch_array($device_name)){ 												
												 ?>
				                                 <option value="<?php echo $row['dev_name_hb']; ?>"><?php echo $row['dev_name_hb']; ?></option>
				                                 <?php } ?>
				                               </select>
		                                     </div>
	                                    </div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">Spesifikasi</label>
											<div class="controls">
												<textarea class="textarea2" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Spesifikasi" name="dev_model" id="textarea" rows="8" cols="30" maxlength="30" ></textarea>
														<div id="textarea_feedback2"></div>
											</div>
										</div>

										<script language=JavaScript>
											$(document).ready(function() {
										    var text_max = 30;
										    $('#textarea_feedback2').html(text_max + ' characters remaining');

										    $('#textarea').keyup(function() {
										        var text_length = $('#textarea').val().length;
										        var text_remaining = text_max - text_length;

										        $('#textarea_feedback2').html(text_remaining + ' characters remaining');
										    });
										});
										</script>

										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Sumber Anggaran</label>
											<div class="controls">
											<select name="dev_sumber"  required>										
													<option>APBD</option>
													<option>APBN</option>
													<option>APBS</option>
													<option>BANTUAN</option>																									
												</select>								
											</div>
										</div>

	                                    <div class="control-group">
											<label class="control-label" for="inputPassword">Tahun</label>
											<div class="controls">
											<input type="text" class="span8" name="tahun" id="inputPassword" placeholder="Tahun" required>
											</div>
										</div>


	                                    <div class="control-group">
											<label class="control-label" for="inputPassword">Qty (Jumlah)</label>
											<div class="controls">
											<input type="text" class="span8" name="qtyu" id="inputPassword" placeholder="QTY" required>
											</div>
										</div>
										
								
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
											<div class="controls">
											<select name="dev_status"  required>										
													<option>Baru</option>
													<option>Digunakan</option>
													<option>Rusak</option>																									
												</select>								
											</div>
										</div>
																				


	
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
										
													<textarea class="textarea2" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Isi Deskripsi dibawah ini" name="dev_desc" id="textarea" rows="8" cols="30" maxlength="30" ></textarea>
														<div id="textarea_feedback"></div>
											</div>
										</div>
											
										<script language=JavaScript>
											$(document).ready(function() {
										    var text_max = 30;
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
<?php
if (isset($_POST['save'])){
$dev_id = $_POST['dev_id'];
$dev_desc = $_POST['dev_desc'];
$dev_serial = $_POST['dev_serial'];
$dev_model = $_POST['dev_model'];
$dev_status = $_POST['dev_status'];
$nomor_urut = $_POST['nomor_urut'];
$tahun = $_POST['tahun'];
$qtyu = $_POST['qtyu'];
$dev_sumber = $_POST['dev_sumber'];
										
						
$query = mysql_query("select * from st_barang where dev_serial = '$dev_serial' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('kode Barang sudah ada, ganti dengan yang lain');
window.location = "add_Device_hb.php";
</script>
<?php
}else{
mysql_query("insert into st_barang (dev_id,dev_desc,dev_serial,dev_model,dev_status,nomor_urut,tahun,qtyu,dev_sumber) values('$dev_id','$dev_desc','$dev_serial','$dev_model','$dev_status','$nomor_urut','$tahun','$qtyu','$dev_sumber')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add device Detail id $dev_id')")or die(mysql_error());											
?>
<script>
window.location = "device_habispakai.php";
$.jGrowl("Device Successfully added", { header: 'Device add' });
</script>
<?php
}
}
?>
																										
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