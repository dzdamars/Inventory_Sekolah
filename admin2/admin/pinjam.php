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
		                                <div class="muted pull-left"><strong>FORM PEMINJAMAN</strong></div>
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
											<label class="control-label" for="inputPassword">NAMA</label>
											<div class="controls">
											<input type="text" class="span8" name="nama" id="inputPassword" placeholder="Nama Siswa" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">KELAS</label>
											<div class="controls">
											<input type="text" class="span8" name="kelas" id="inputPassword" placeholder="Kelas" required>
											</div>
										</div>

										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">JURUSAN</label>
			                                <div class="controls">
				                              <select name="jurusan" class="chzn-select"  required/>
				                                 <option></option>
			                                     <?php $jurusan=mysql_query("select * from jurusan")or die(mysql_error()); 
			                                     while ($row=mysql_fetch_array($jurusan)){ 												
												 ?>
				                                 <option value="<?php echo $row['jurusan_kamu']; ?>"><?php echo $row['jurusan_kamu']; ?></option>
				                                 <?php } ?>
				                               </select>
		                                     </div>
	                                    </div>					



	                                    <div class="control-group">
											<label class="control-label" for="inputPassword">Qty (Jumlah)</label>
											<div class="controls">
											<input type="text" class="span8" name="qty" id="inputPassword" placeholder="QTY" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">START</label>
											<div class="controls">
											<select name="mulai" id="mulai" class="form-mulai">
													<option name="mulai" id="mulai">07.00</option>
													<option name="mulai" id="mulai">08.00</option>
													<option name="mulai" id="mulai">09.00</option>
													<option name="mulai" id="mulai">10.00</option>
													<option name="mulai" id="mulai">11.00</option>
													<option name="mulai" id="mulai">12.45</option>
													<option name="mulai" id="mulai">13.30</option>
													<option name="mulai" id="mulai">14.30</option>
													<option name="mulai" id="mulai">15.30</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">END</label>
											<div class="controls">
											<select name="sampai" id="sampai" class="form-mulai">
													<option name="sampai" id="sampai">07.00</option>
													<option name="sampai" id="sampai">08.00</option>
													<option name="sampai" id="sampai">09.00</option>
													<option name="sampai" id="sampai">10.00</option>
													<option name="sampai" id="sampai">11.00</option>
													<option name="sampai" id="sampai">12.45</option>
													<option name="sampai" id="sampai">14.00</option>
													<option name="sampai" id="sampai">15.30</option>
													<option name="sampai" id="sampai">16.45</option>
													</option>
												</select>
											</div>
										</div>
								
										

										<div id="hide">
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >STATUS</label>
											<div class="controls">
											<select name="status"  required>										
													<option>PINJAM</option>																									
												</select>								
											</div>
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
$nomor_pinjam= $_POST['nomor_pinjam'];
$dev_desc = $_POST['dev_desc'];
$dev_status = $_POST['dev_status'];
$qty = $_POST['qty'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
$status = $_POST['status'];

mysql_query("insert into table_pinjam (nomor_pinjam,dev_desc,dev_status,qty,nama,kelas,mulai,sampai,status,jurusan) values('$nomor_pinjam','$dev_desc','$dev_status','$qty','$nama','$kelas','$mulai','$sampai','$status','$jurusan')")or die(mysql_error());
										
?>
<script>
window.location = "barang_pinjam.php";
$.jGrowl("Device Successfully added", { header: 'Device add' });
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
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>