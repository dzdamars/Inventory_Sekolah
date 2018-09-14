<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'damage' OR dev_status = 'Damage' ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Damage device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Damage device Stock List
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
															
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_damage.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 	 
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
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>NO.URUT</th>
					<th>KODE BARANG </th>
					<th>NAMA BARANG</th>
			        <th>SPESIFIKASI  </th>
					<th>KONDISI  </th>
					<th>location Name </th>	
										 <th class="empty"></th>					

					<th class="empty"></th>		
                    					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice			
		                     LEFT JOIN location_details ON stdevice.id = location_details.id		
		                     LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
							 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
							 where dev_status = 'damage' ORDER BY location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['nomor_urut']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Damage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
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
		
			  		
</div>
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