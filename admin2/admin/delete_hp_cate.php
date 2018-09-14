<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_dev_name'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM habis_pakai where dev_id='$id[$i]'");
}
header("location: hp_cate.php");
}
?>