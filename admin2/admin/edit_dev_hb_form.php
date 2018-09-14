<div class="row-fluid">				  
   <a href="hp_cate.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add Client" ><i class="icon-plus-sign icon-large"></i> Add Device Name</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Device Name</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from habis_pakai where dev_id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['dev_name_hb']; ?>" name="dev_name_hb" id="focusedInput" type="text" placeholder = "Device Name" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Update"><i class="icon-save icon-large"> Update</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
										
					</div>
                </div>
            </div>
              <!-- /block -->
      </div>
<?php		
if (isset($_POST['update'])){

$dev_name = $_POST['dev_name_hb'];

mysql_query("update habis_pakai set dev_name_hb = '$dev_name'  where dev_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Device Type $dev_name')")or die(mysql_error());	
?>
<script>
  window.location = "hp_cate.php";
 $.jGrowl("Device Name Successfully Update", { header: 'Device Name Update' });  
</script>
<?php
}
?>