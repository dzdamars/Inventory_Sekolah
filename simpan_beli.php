<?php
include('config.php');
dbcon();

$dev_serial = $_POST['dev_serial'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$lokasi = $_POST['lokasi'];
$dev_model = $_POST['dev_model'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$st_date = $_POST['st_date'];
$status = $_POST['status'];
$dev_status = $_POST['dev_status'];
$total = $price * $qty;
$hasil = $total;

$result = mysql_query("SELECT * FROM item_name ")or die(mysql_error());
$count = mysql_fetch_array($result);
$jumlah = $count['qty'];
$item_bar = $count['itm_name'];

$ambil = $jumlah - $qty;
$hayo = $ambil;

$num = mysql_query("UPDATE item_name set num='$num' , qty = '$hayo'")or die (mysql_error());
$query = mysql_query("INSERT INTO st_barang(dev_serial,kelas,jurusan,lokasi,dev_model,qty,price,st_date,status,dev_status,hasil) values('$dev_serial','$kelas','$jurusan','$lokasi','$dev_model','$qty','$price','$st_date','$status','$dev_status','$hasil')")or die(mysql_error());

echo "<script>window.location.href='stoks.php';</script>";
?>