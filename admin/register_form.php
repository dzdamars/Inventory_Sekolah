<?php
mysql_connect("localhost","root","");
mysql_select_db("thesis") ;

$a="select*from admin LIMIT 4" ;
$b=mysql_query($a) ;

while ($c=mysql_fetch_array($b) ) {
?>
				<?php } ?>

<?php

	
mysql_connect("localhost","root","");
mysql_select_db("thesis");

$simpan_co=mysql_query("INSERT INTO  `thesis`.`admin` (
`admin_id` ,
`firstname` ,
`lastname` ,
`username` ,
`password` 
) VALUES
	(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]')");
?>
<script>
window.location = "index.php";
$.jGrowl("Device Successfully added", { header: 'User add' });
</script>
	 </div>
	 
	 </div>
	 
	 
	 
</div>