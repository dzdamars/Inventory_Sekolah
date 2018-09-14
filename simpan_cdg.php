<?php
include('config.php');
dbcon();

$dev_name = $_POST['dev_name'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$lokasi = $_POST['lokasi'];
$dev_id = $_POST['dev_id'];
$qtyu = $_POST['qtyu'];
$price = $_POST['price'];
$st_date = $_POST['st_date'];
$status = $_POST['status'];
$dev_status = $_POST['dev_status'];
$nomor_urut = $_POST['nomor_urut'];
$tahun = $_POST['tahun'];
$dev_model = $_POST['dev_model'];
$dev_sumber = $_POST['dev_sumber'];
$dev_serial = $_POST['dev_serial'];
$dev_desc = $_POST['dev_desc'];
$total = $price * $qty;
$hasil = $total;
 
 $ab = mysql_query("SELECT * FROM habis_pakai where dev_name_hb='$dev_id'")or die(mysql_error());
 $cd = mysql_fetch_array($ab);
$abc = $cd['qty'];
$num = $cd['num'];

$plus = $abc - $qtyu;

echo "$plus";

$ubah = mysql_query("UPDATE habis_pakai set num='$num' , qty='$plus' where dev_name_hb='$dev_id'")or die(mysql_error());
/*
$mug1 = mysql_query("SELECT * FROM item_mug where dev_model='$dev_model'")or die(mysql_error());
$mug2 = mysql_fetch_array($mug1);
$muges = $mug2['qty'];
$itmss_mug = $mug2['dev_model'];

$muter = $muges - $qty;
$rese = $muter;

$pusing = mysql_query("UPDATE item_mug set num='$num' , qty = '$rese'")or die (mysql_error());
*/
$query = mysql_query("INSERT INTO st_barang(dev_name,kelas,jurusan,lokasi,dev_id,qtyu,price,st_date,status,dev_status,nomor_urut,tahun,dev_sumber,dev_model,dev_serial,dev_desc,hasil) values('$dev_name','$kelas','$jurusan','$lokasi','$dev_id','$qtyu','$price','$st_date','$status','$dev_status','$nomor_urut','$tahun','$dev_sumber','$dev_model','$dev_serial','$dev_desc','$hasil')")or die(mysql_error());


echo "<script>window.location.href='stoks.php';</script>";

?>