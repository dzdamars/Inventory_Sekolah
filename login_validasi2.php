<?php
@session_start();
include('config.php');
dbcon();
$password = $_POST['password'];

$query =mysql_query("SELECT * FROM admin ") or die(mysql_error());
$data =mysql_fetch_array($query);
$num = mysql_num_rows($query);
$user = $data['password'];

if ($num > 0){
		$_SESSION['password']=$data['password'];
		echo "<script>window.location.href='pengembalian.php';</script> ";
		
		 }else{ 
				echo "<script>alert('Username dan password salah');window.location.href='index.php';</script>";
		}	
?>