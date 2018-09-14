<?php
include('device_edit_kembali.php');

$password = $_POST['password'];



		/*................................................ admin .....................................................*/
			$query = "SELECT * FROM admin WHERE password='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		


if ($num_row > 0){
		$_SESSION['password']=$row['password'];
$FG =( "update stdevice set status = 'kembali' where id = '$get_id'");
	
$DF = mysql_query($FG);

echo"<script>window.location.href='device_pinjam.php';</script>";
}else{
	 			echo	"<script>alert('Username dan password salah');</script>";
				echo 	"<script>window.location.href='pengembalian.php?echo 'nama='.$get_id';</script>";	
}
?>