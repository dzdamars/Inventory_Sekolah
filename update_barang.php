<?php
include('config.php');
dbcon();
mysql_query("UPDATE st_barang set
	status = '$_POST[status]'
	where id = '$_GET[id]'")or die(mysql_error());

	echo "<script>window.location.href='stoks.php';</script>";
	?>