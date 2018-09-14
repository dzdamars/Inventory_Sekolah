<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_item=mysql_query("select * from stdevice
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of All Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Device Stock List 
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
		   <a href="print_peminjaman.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
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
	<form action="delete_dev_name_pj.php" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
  		<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#device_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
		<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
		</script>
		<?php include('modal_delete_st.php'); ?>
		<thead>		
		        <tr>
		        	<th>NO</th>			        
					<th>NAMA</th>
					<th>KELAS </th>
					<th>JURUSAN</th>
			        <th>NAMA BARANG  </th>
			        <th>QTY </th>
					<th>START  </th>
					<th>END  </th>
					<th>KET  </th>
					<th>STATUS  </th>
					<th>Kembali  </th>
				
							
		    </tr>
		</thead>
<tbody>
	
<!-----------------------------------Content------------------------------------>
<?php
	    $device_query = mysql_query("select * from table_pinjam 
		LEFT JOIN device_name ON table_pinjam.nomor_pinjam=device_name.dev_id
		LEFT JOIN jurusan ON table_pinjam.nomor_pinjam=jurusan.id
		where NOT EXISTS 
	   (select * from location_details where table_pinjam.nomor_pinjam = location_details.id)") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$nomor_pinjam = $row['nomor_pinjam'];
		$dev_name = $row['dev_name'];
		$jurusan = $row['jurusan'];
		?>
										


		<tr>
			<td><?php echo $row['nomor_pinjam']; ?></td>		
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['kelas']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['inventaris']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['mulai']; ?></td>
			<td><?php echo $row['sampai']; ?></td>

			
			 <td><?php echo substr($row['dev_desc'], 0, 8); ?></td>
			 <td><?php echo $row['status']; ?></td>
			<td class="empty" width="80">
			<a rel="tooltip" title="kembalikan" id="<?php echo $nomor_pinjam; ?>" href="device_edit_kembali.php<?php echo '?nomor_pinjam='.$nomor_pinjam; ?>" class="btn btn-success"><i class="icon-pencil"> KEMBALIKAN</i></a></td>
			 <td width="30">
				<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $nomor_pinjam; ?>">
			</td>
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