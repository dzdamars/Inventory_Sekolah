<?php
include('config.php');
dbcon();

$namea = mysql_query("SELECT * FROM table_pinjam ORDER BY nomor_pinjam DESC");
$nameb = mysql_fetch_array($namea);

$deva = mysql_query("SELECT * FROM stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id WHERE dev_serial = '$_POST[dev_serial]'");
$devb = mysql_fetch_array($deva);

$nameid = $nameb['nomor_pinjam'];
$dev = $devb['dev_name'];

$store = mysql_query("UPDATE table_pinjam SET inventaris = '$dev' WHERE nomor_pinjam = ".$nameid." ")or die(mysql_error());

echo "<script>window.location.href='page.php';</script>";
?>
