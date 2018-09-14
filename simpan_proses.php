<?php
include('config.php');
session_start();
dbcon();

date_default_timezone_set('Asia/Jakarta');

$nama = $_SESSION['nama'];
$nis = $_SESSION['nis'];
$kelas = $_SESSION['kelas'];
$jurusan = $_SESSION['jurusan'];
$qty = $_POST['qty'];
$date1 = date("Y-m-d H-i-s");
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
$status = $_POST['status'];
$dev_desc = $_POST['dev_desc'];
$dev_status = $_POST['dev_status'];	

$query = mysql_query("INSERT INTO table_pinjam(nama,nis,kelas,jurusan,qty,date1,mulai,sampai,status,dev_status,dev_desc) values('$nama','$nis','$kelas','$jurusan','$qty','$date1','$mulai','$sampai','$status','$dev_status','$dev_desc')")or die(mysql_error());

echo "<script>window.location.href='barang_pinjam.php';</script>";
?>