<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
				  
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice
		         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		         where NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;New Device List</div>
							 <div class="muted pull-right">
								Number of Device (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">New Device (s) List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>		  
						   	 
  <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	
</div>
</div>

<div class="block-content collapse in">
   <div class="span12">
	
<form id="send" method="post">	
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Location Name</label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>
			
	  <div class="control-group"> 
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Assign"><i class="icon-share"> Assign Location</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
			 		 
		
	  </div>
 </div>
</div>                      
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>NO.URUT</th>
					<th>KODE BARANG </th>
					<th>NAMA BARANG</th>
			        <th>SPESIFIKASI  </th>
					<th>KONDISI  </th>
					 <th class="empty"></th>					
                    <th class="empty"></th>	           					              		  
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	   (select * from location_details where stdevice.id = location_details.id)") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['dev_name'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['nomor_urut']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>

			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Baru')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Digunakan')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
			</td>
			
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80">
			<a rel="tooltip" title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i></a></td>
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80">
			<a rel="tooltip" title="Detail Device" id="e<?php echo $id; ?>" href="device_detail.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Detail</i></a></td>
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>	
<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
			
	   }
	});
});
</script>
				  		
</div>
</div>

</div>
</div>
</div>

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>