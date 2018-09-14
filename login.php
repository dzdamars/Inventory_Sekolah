<?php
@session_start();
include('config.php');
dbcon();
$username = $_POST['nama'];

$query =mysql_query("SELECT * FROM murid where id ='$username'  ") or die(mysql_error());
$data =mysql_fetch_array($query);
$num = mysql_num_rows($query);
$user = $data['nama'];

if ($num > 0){
		$_SESSION['login_user']=$data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['kelas'] = $data['kelas'];
		$_SESSION['jurusan'] = $data['jurusan'];
		$_SESSION['nis'] = $data['id'];
		echo "<script>window.location.href='page.php';</script> ";
		
		 }else{ 
				echo "<script>alert('Username dan password salah');window.location.href='index.php';</script>";
		}	
?>